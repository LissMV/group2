<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/home', function () {
    return view('components.home');
});
