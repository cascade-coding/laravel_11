<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
})->middleware('role:guest');

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('under-work');
