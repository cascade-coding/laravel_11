<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index'])->name('index');
Route::post('/', [StudentController::class, 'create'])->name('create');
Route::get('/edit_student/{id}', [StudentController::class, 'edit'])->name('edit');
Route::put('/edit_student/{id}', [StudentController::class, 'update'])->name('update');
Route::get('/delete_student/{id}', [StudentController::class, 'destroy'])->name('destroy');
