<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('body.welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('users.signin');
})->name('login');

Route::get('/register', function () {
    return view('users.signup');
})->name('register');

Route::get('/users/edit', function () {
    return view('users.edit',
    [
        'user' => Auth::user(),
        'store' => Auth::user()->stores(),
    ]);
})->name('usersEdit');

Route::get('/home', function () {
    return view('body.home');
})->name('home');

Route::get('/sellerHome', function () {
    return view('stores.seller_home');
});

Route::get('/addProduct', function () {
    return view('products.add_product');
});

Route::get('/store', function () {
    return view('stores.store');
})->name('store');

Route::get('/community', function () {
    return view('community.community');
});

Route::get('/learning', function () {
    return view('community.learning');
})->name('learning');

Route::get('/shoppingCart', function () {
    return view('body.shopping-cart');
})->name('shoppingCart');

Route::get('/seeProducts', function () {
    return view('products.see_products');
});

Route::get('/events', function () {
    return view('community.event');
});

Route::get('/about_us', function () {
    return view('body.about_us');
})->name('about_us');

