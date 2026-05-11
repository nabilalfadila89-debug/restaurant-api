<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodCategoryController;
use App\Http\Controllers\MenuItemController;

Route::apiResource('food-categories', FoodCategoryController::class);
Route::apiResource('menu-items', MenuItemController::class);