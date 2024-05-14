<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/about', AboutController::class)->name('about');

Route::get('/post/{category}/page', function () {
    return view('post');
})->name('post');
