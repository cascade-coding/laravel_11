<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateAccountController extends Controller
{
    public function show(Request $request)
    {
        return view('create_account');
    }

    public function create_account(Request $request)
    {
        // ! add validation rules
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|min:10',
        ]);


        dd($validated);

        $request->flashExcept('password');
        return view('create_account');
    }
}
