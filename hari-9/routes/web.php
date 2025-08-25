<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/kategori/{slug}', [BlogController::class, 'category'])->name('blog.cat');
Route::get('/post/{slug}', [BlogController::class, 'show'])->name('blog.show');
