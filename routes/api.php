<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/greeting', function () {
    return response()->json(["message" => "Hello from server"]);
});

// Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);

Route::post('/students/add', [StudentController::class, 'create']);

// Route::resource('/students', StudentController::class);

// ! protected routes
Route::get('/students', [StudentController::class, 'index'])->middleware('auth:sanctum');
Route::post('/user/register', [UserController::class, 'register']);
Route::post('/user/login', [UserController::class, 'login']);
Route::post('/user/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');