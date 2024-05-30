<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/Login', [UserController::class, 'login']);

Route::post('/Register', [UserController::class, 'register']);


