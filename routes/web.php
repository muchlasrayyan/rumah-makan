<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

// Baris ini yang akan memanggil daftar menu rumah makan kamu
Route::get('/', [MenuController::class, 'index']);


use App\Http\Controllers\AdminAuthController;

Route::get('/admin/login', [AdminAuthController::class, 'loginForm']);
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->middleware('auth:admin');
Route::get('/admin/logout', [AdminAuthController::class, 'logout']);