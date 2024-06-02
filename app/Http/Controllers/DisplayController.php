<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DisplayController extends Controller
{
    public function display(Request $request)
    {
        // $user = Auth::user();

        $user = $request->user();

        $user = Auth::id();

        return $user;
    }
    public function check_auth(Request $request)
    {

        if (Auth::check()) {
            dd("user is authenticated");
        }

        $user = Auth::user();

        return $user;
    }
}
