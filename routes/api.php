<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\Menu\MenuController;

// login and register with Username and Password (consultant)
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::resource('menus', MenuController::class);
Route::resource('foods', MenuController::class);
