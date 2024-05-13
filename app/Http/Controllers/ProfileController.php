<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $users = ["david", "jhon", "kate"];
        return view('profile', ['name' => 'Jhon', 'users' => $users]);
    }
}
