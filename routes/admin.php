<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FamilyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

//Ruta de familias
Route::resource('families', FamilyController::class);

//Ruta de categorías
Route::resource('categories', CategoryController::class);