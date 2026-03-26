<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaesarController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'prosesLogin']);
Route::get('/dashboard', [AuthController::class, 'dashboard']);
// route caesar
Route::get('/caesar', [CaesarController::class, 'index']);
Route::post('/caesar/process', [CaesarController::class, 'process']);