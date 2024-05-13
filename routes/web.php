<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

// serve just the view
Route::view('/admin-dashboard', 'dashboard');

// Nested View Directories
Route::view('/admin-profile', 'admin.profile');


// Passing Data to Views
Route::get('/users/profile', function () {
    return view('users.profile', ['name' => 'Jhon']);
});

Route::view('/users/me', 'users.profile', ['name' => 'David']);

// passing data using with method
Route::get('/users/user-profile', function () {
    return view('users.profile')->with('name', 'Kate');
});
