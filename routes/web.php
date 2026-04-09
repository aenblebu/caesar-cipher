<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaesarController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'prosesLogin']);
Route::get('daftar_pengguna', [AuthController::class, 'dashboard']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/daftar_pengguna', [AuthController::class, 'daftarPengguna']);
// route caesar
Route::get('/caesar', [CaesarController::class, 'index']);
Route::post('/caesar/process', [CaesarController::class, 'process']);