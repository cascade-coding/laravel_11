<?php

namespace App\Http\Controllers;

use App\Models\PasswordReset;
use App\Models\PasswordResetToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    public function send_password_reset_email(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response([
                'message' => 'Email not found'
            ], 404);
        }

        $token = Str::random(60);

        // ! save the token in db
        $data = PasswordResetToken::firstOrCreate(
            ['email' => $request->email],
            [
                'token' => $token,
                'created_at' => Carbon::now(),
            ]
        );

        // dump('http://127.0.0.1:3000/api/user/reset/' . $data->token);

        // ! send email
        Mail::send('password_reset_email', ['token' => $data->token], function (Message $message) use ($user) {
            $message->subject('Reset Your Password');
            $message->to($user->email);
        });

        return response([
            'message' => 'Check your email for password reset link...'
        ], 200);
    }

    public function password_reset(Request $request, $token)
    {

        // ! check token expiry
        $date = Carbon::now()->subMinutes(3)->toDateTimeString();

        PasswordResetToken::where('created_at', '<=', $date)->delte();

        $request->validate([
            'password' => 'required|confirmed|min:8'
        ]);

        $reset_data = PasswordResetToken::where('token', $token)->first();

        if (!$reset_data) {
            return response([
                'message' => 'Invalid or Expired token'
            ], 400);
        }

        $user = User::where('email', $reset_data->email)->first();

        $user->password = Hash::make($request->password);

        $user->save();

        PasswordResetToken::where('email', $reset_data->email)->delete();

        return response([
            'message' => 'New password is set!'
        ], 200);
    }
}
