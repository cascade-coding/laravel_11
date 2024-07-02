<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registration(Request $request)
    {
        $request->validate([
            'name' => 'required|max:80|min:2',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        if (User::where('email', $request->email)->first()) {
            return response([
                'message' => 'This email already has been taken'
            ], 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken($request->email);

        return response(['message' => 'Registration successful!', 'token' => $token->plainTextToken], 201);
    }

    public function login(Request $request)
    {
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['message' => 'invalid credentials'], 401);
        }

        // ! to logout from all the other devices
        // $user->tokens()->where('name', $user->email)->delete();

        $token = $user->createToken($request->email);

        return response(['message' => 'logged in successful!', 'token' => $token->plainTextToken], 200);
    }

    public function logout(Request $request)
    {
        $user = $request->user();

        $user->tokens()->where('name', $user->email)->delete();

        // $request->user()->currentAccessToken()->delete();
        return response(['message' => 'logout successful!'], 200);
    }

    public function me(Request $request)
    {
        $user = $request->user();

        return response(['message' => 'welcome!', 'data' => $user], 200);
    }

    public function change_password(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8'
        ]);

        $user = $request->user();

        if (!Hash::check($validated["current_password"], $user->password)) {
            return response(['message' => 'Invalid current password'], 400);
        }

        $user->password = Hash::make($validated["new_password"]);

        $user->save();

        return response(['message' => 'password updated!'], 200);
    }
}
