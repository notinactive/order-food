<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Food\FoodController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Order\OrderController;

// login and register with phone number
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

//Show menus and foods (no need to login)
Route::resource('menus', MenuController::class);
Route::resource('foods', FoodController::class);

//All routes which need login
Route::middleware('auth:api')->group(function () {
    Route::get('food/histories', [FoodController::class, "histories"]);
    Route::get('food/inventory', [FoodController::class, "histories"]);
    Route::resource('orders', OrderController::class);
});






