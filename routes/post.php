<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'register']);

//Route::patch('/users/update/{id}', [UserController::class, 'update']);

Route::post('/store', [StoreController::class, 'create']);

Route::post('/product', [ProductController::class, 'create']);

Route::post('/users/edit/update', [UserProfileController::class, 'update'])->name('users.edit.update');

Route::post('/stores/edit/update', [StoreController::class, 'edit'])->name('stores.edit.update');

Route::post('/logout', [UserController::class, 'logout']);

Route::post('/review', [ReviewController::class, 'create'])->name('reseña.crear');
