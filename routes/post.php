<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'register']);

Route::patch('/users/update/{id}', [UserController::class, 'update']);

Route::post('/stores/create', [StoreController::class, 'create']);
