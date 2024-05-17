<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignUpController;

Route::get('/', [SignUpController::class, 'show']);
Route::post('/', [SignUpController::class, 'signup']);

Route::view('/sign-in', 'sign-in')->name('sign-in');


