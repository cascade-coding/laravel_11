<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CustomerController::class, 'create'])->name('add_customer');
Route::get('/get_mobile/{id}', [CustomerController::class, 'show'])->name('get_mobile');
Route::get('/get_customer/{id}', [MobileController::class, 'show'])->name('get_customer');
Route::get('/get_info/{id}', [HomeController::class, 'show'])->name('get_info');
