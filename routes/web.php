<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', [LaporanController::class, 'form'])->name('form');

Route::post('/konfirmasi', [LaporanController::class, 'konfirmasi'])->name('konfirmasi');

Route::get('/laporan', [LaporanController::class, 'daftar'])->name('laporan');