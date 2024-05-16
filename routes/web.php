<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

use App\Http\Middleware\UnderConstruction;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware(UnderConstruction::class);
// Route::get('/dashboard', [DashboardController::class, 'show'])->middleware([First::class, Second::class]);
