<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('users.signin');
});

Route::get('/register', function () {
    return view('users.signup');
});

Route::get('/layout', function () {
    return view('layout');
});
