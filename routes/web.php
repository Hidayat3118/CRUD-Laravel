<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    // autentifikasi
    Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
    Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

    Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login.tampil');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});



// home
Route::get('/', [SiswaController::class, 'home'])->name('home');

// Middleware
Route::middleware('auth')->group(function () {
    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    // crud
    Route::get('/siswa', [SiswaController::class, 'tampil'])->name('siswa.tampil');
    Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
    Route::post('/siswa', [SiswaController::class, 'submit'])->name('siswa.submit');
    Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::post('/siswa/update/{id}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/siswa/delete/{id}', [SiswaController::class, 'delete'])->name('siswa.delete');
});
