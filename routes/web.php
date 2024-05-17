<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateAccountController;

Route::get('/', [CreateAccountController::class, 'show']);
Route::post('/', [CreateAccountController::class, 'create_account']);
