<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [HomeController::class, 'create'])->name('add_employee');
Route::get('/edit_employee/{id}', [HomeController::class, 'edit'])->whereNumber('id')->name('edit_employee');
Route::put('/edit_employee/{id}', [HomeController::class, 'update'])->whereNumber('id')->name('update_employee');
Route::get('/delete_employee/{id}', [HomeController::class, 'destroy'])->whereNumber('id')->name('delete_employee');
