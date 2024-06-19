<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            "name" => "required|min:2",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed",
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        $token = $user->createToken('auth_token');

        return response([
            'token' => $token->plainTextToken,
            'user' => $user
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'invalid input!'
            ], 401);
        }

        $token = $user->createToken('auth_token');

        return response([
            'token' => $token->plainTextToken,
        ], 200);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response(["message" => "You're logged out!"]);
    }
}
