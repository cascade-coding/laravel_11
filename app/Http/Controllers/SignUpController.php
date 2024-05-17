<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function show()
    {
        return view('sign-up');
    }
    public function signup(Request $request)
    {
        // ! accessing input data
        // dd($request);
        // dd($request->all());
        // dd($request->input());
        // dd($request->input('name'));
        // dd($request->input('email'));
        // dd($request->input('name', 'Jhon doe'));
        // dd($request->name);

        // ! Check Input Presence
        // if($request->has('name')){
        //     dd($request->name);
        // }
        // if($request->has(['name', 'email'])){
        //     dd($request->name, $request->email);
        // }
        // if($request->hasAny(['name', 'email'])){
        //     dd($request->name, $request->email);
        // }

        // if($request->filled('name')){
        //     dd($request->name);
        // }

        // if($request->missing('phone')){
        //     print('missing input');
        // }

        // $request->whenHas('name', function($name){
        //     print($name);
        // });

        // $request->whenFilled('name', function($name){
        //     print($name);
        // });


        // ! save and retrieve old input
        // $request->flash();
        // $request->flashOnly(['name', 'email']);
        // $request->flashExcept('password');
        // $request->flashExcept(['password', 'name']);

        // print($request->old('name'));
        // print($request->old('email'));
        // print($request->old('password'));

        // ! Flashing Input Then Redirecting
        // return redirect('sign-in')->withInput();
        // return redirect()->route('sign-in')->withInput();
        return redirect('sign-in')->withInput($request->except('password'));

        // return view('sign-up');
    }
}
