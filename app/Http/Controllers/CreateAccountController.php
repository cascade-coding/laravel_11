<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;

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
            // 'name' => ['required', new Uppercase], // ! using object rule
            'name' => ['required', function ($attribute, $value, $fail) {
                if ($value === 'jhon') {
                    $fail("The {$attribute} is taken");
                }
            }], // ! using closure
            'email' => 'required|email|min:10',
            'password' => 'required',
        ]);


        dd($validated);

        $request->flashExcept('password');
        return view('create_account');
    }
}
