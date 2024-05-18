<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;
use App\Http\Requests\CreateAccountRequest;

class CreateAccountController extends Controller
{
    public function show(Request $request)
    {
        return view('create_account');
    }

    public function create_account(CreateAccountRequest $request)
    {
        // ! get the validated input data
        $validated = $request->validated();

        dd($validated);

        // ! Retrieve a portion of the validated input data...
        // $validated = $request->safe()->only(['name', 'email']);
        // $validated = $request->safe()->except(['name', 'email']);


        $request->flashExcept('password');
        return view('create_account');
    }
}
