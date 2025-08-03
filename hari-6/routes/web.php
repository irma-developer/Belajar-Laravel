<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SiswaController; // <--- Tambahkan controller siswa di sini

// Halaman utama
Route::get('/', [SiteController::class, 'home']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/contact', [SiteController::class, 'contact']);

// Routing untuk data siswa
Route::get('/siswa', [SiswaController::class, 'index']); // Tampilkan semua siswa
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');

Route::post('/siswa', [SiswaController::class, 'store']); // Simpan data siswa
