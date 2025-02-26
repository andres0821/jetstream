<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard'); 
})->name('dashboard');

Route::resource('categories', CategoryController::class);