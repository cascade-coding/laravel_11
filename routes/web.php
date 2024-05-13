<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    $user_type = "guest" === "admin" ? true : false;
    // $movies = ["dune", "pulp fiction", "fight club"];
    $movies = [];
    return view('welcome')->with('user_type', $user_type)->with('movies', $movies);
});

Route::get('/user/profile', ProfileController::class);
