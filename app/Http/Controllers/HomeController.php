<?php

namespace App\Http\Controllers;

use App\Jobs\SendMessage;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('id', $request->user()->id)->select([
            'id', 'name', 'email',
        ])->first();

        return response([
            'user' => $user,
        ], 200);
    }


    public function messages()
    {
        $messages = Message::with('user')->get()->append('time');

        return response(["messages" => $messages], 200);
    }


    public function message(Request $request)
    {
        $message = Message::create([
            'user_id' => Auth::id(),
            'text' => $request->text,
        ]);

        SendMessage::dispatch($message);

        return response([
            'success' => true,
            'message' => "Message created and job dispatched.",
        ], 200);
    }
}
