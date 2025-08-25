<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// Dashboard
Route::get('/', function () {
    return view('dashboard'); // pastikan ada resources/views/dashboard.blade.php
})->name('dashboard');

// Categories
Route::resource('categories', CategoryController::class);

// Products
Route::resource('products', ProductController::class);

// Logout (dummy dulu kalau belum ada auth)
Route::post('/logout', function () {
    // nanti kalau pakai Auth bisa diganti
    return redirect()->route('dashboard');
})->name('logout');
