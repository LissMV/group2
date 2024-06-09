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

Route::get('/users/edit', function () {
    return view('users.edit',
    [
        'user' => Auth::user(),
        'store' => Auth::user()->stores()
    ]);
});

Route::get('/home', function () {
    return view('components.home');
});

Route::get('/storeForm', function () {
    return view('stores.store_form');
});

Route::get('/productForm', function () {
    return view('products.product_form');
});

Route::get('/store', function () {
    return view('stores.store');
});

Route::get('/community', function () {
    return view('components.community');
});

Route::get('/learning', function () {
    return view('components.learning');
});

Route::get('/shoppingCart', function () {
    return view('components.shopping-cart');
});

Route::get('/seeProducts', function () {
    return view('products.see_products');
});

