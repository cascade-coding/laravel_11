<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show($name)
    {
        return view('admin.profile', ['name' => $name]);
    }
    
    function edit()
    {
        return view('admin.profile', ['name' => 'Jhon doe']);
    }
}
