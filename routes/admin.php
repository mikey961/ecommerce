<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FamilyController;
use App\Http\Controllers\Admin\SubcategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

//Ruta de familias
Route::resource('families', FamilyController::class);

//Ruta de categorías
Route::resource('categories', CategoryController::class);

//Ruta de subcategorías
Route::resource('subcategories', SubcategoryController::class);