<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'hello there!';
});

// with parameter
Route::get('/user/{id}', function ($id) {
    return "id is " . $id;
});

// multiple parameters
Route::get('/post/{post_id}/comment/{comment_id}', function ($post_id, $comment_id) {
    return "post id is $post_id and comment id is $comment_id";
});

// optional parameter
Route::get('/student/{name?}', function ($name = 'Jhon doe') {
    return "student name is $name";
});

// with regular expression
Route::get('/movie/{name?}', function ($name = 'Fight Club') {
    return "movie name is $name";
})->where('name', '[A-Za-z]+');

Route::get('/movies/{id}/{name}/', function ($id, $name = 'Fight Club') {
    return "movie name is $name and id is $id";
})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

// with regular expression helper methods
Route::get('/shows/{id}/{name}', function ($id, $name) {
    return "show id is $id and show name is $name";
})->whereNumber('id')->whereAlpha('name');

Route::get('/category/{category}', function ($category) {
    return "category is $category";
})->whereIn('category', ['movie', 'song', 'painting']);

// redirect
// Route::redirect("/tv", "/shows");
// Route::redirect("/tv", "/shows", 301);
Route::permanentRedirect("/tv", "/shows");

// fallback 
Route::fallback(function () {
    return "<h1>page not found!";
});
