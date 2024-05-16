<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('under-work');

// add middleware to multiple routes with group
// Route::middleware(['under-work'])->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });

//     Route::get('/profile', function () {
//         return view('profile');
//     });
// });
