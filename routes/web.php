<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/add_author', [AuthorController::class, "add_author"]);
Route::get('/add_post/{id}', [PostController::class, "add_post"]);

Route::get('/get_post/{id}', [PostController::class, "get_post"]);
Route::get('/get_author/{post_id}', [AuthorController::class, "get_author"]);

Route::get('/show_info/{author_id}', [HomeController::class, "show"]);