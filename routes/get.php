<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('signin');
});

Route::get('/register', function () {
    return view('signup');
});

Route::get('/layout', function () {
    return view('layout');
});
