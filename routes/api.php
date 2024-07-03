<?php

use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::prefix('user')->group(function () {
    // ! public routes
    Route::post('/registration', [UserController::class, 'registration'])->name('registration');

    Route::post('/login', [UserController::class, 'login'])->name('login');

    Route::post('/send_password_reset_email', [PasswordResetController::class, 'send_password_reset_email'])->name('send_password_reset_email');

    Route::post('/password_reset/{token}', [PasswordResetController::class, 'password_reset'])->name('password_reset');

    // ! protected routes
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::get('/logout', [UserController::class, 'logout'])->name('logout');

        Route::get('/me', [UserController::class, 'me'])->name('me');

        Route::post('/change_password', [UserController::class, 'change_password'])->name('change_password');
    });
});
