<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

// with controller
Route::get('/admin/profile/{name}', [UserController::class, 'show']);
Route::get('/admin/profile', [UserController::class, 'edit']);

// with single action controller
Route::get('/users/profile', ProfileController::class);