<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SiswaController; // <--- Tambahkan controller siswa di sini
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GuruController;

// Halaman utama
Route::get('/', [SiteController::class, 'home']);
Route::get('/about', [SiteController::class, 'about'])-> name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');


// Routing untuk data siswa
Route::get('/siswa', [SiswaController::class, 'index']); // Tampilkan semua siswa
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');

Route::post('/siswa', [SiswaController::class, 'store']); // Simpan data siswa

// Form edit siswa
Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');

// Update data siswa
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->name('siswa.update');

// Hapus data siswa
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

//Data Guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');

//Profil
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');


