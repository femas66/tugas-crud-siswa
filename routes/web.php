<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/list-siswa', [SiswaController::class, 'index'])->middleware('cekLogin')->name('list-siswa');
Route::get('/tambah-siswa', [SiswaController::class, 'viewTambahSiswa'])->name('view-tambah-siswa');
Route::post('/tambah-siswa', [SiswaController::class, 'actionTambahSiswa'])->name('action-tambah-siswa');
Route::get('/hapus/{id}', [SiswaController::class, 'hapus'])->name('hapus');
Route::get('/edit/{id}', [SiswaController::class, 'viewEdit']);
Route::post('/edit-siswa', [SiswaController::class, 'edit']);
Route::get('/login', [SiswaController::class, 'viewLogin'])->name('login');
Route::post('/login', [SiswaController::class, 'actionLogin'])->name('actionLogin');
Route::get('/logout', [SiswaController::class, 'logout'])->name('logout');