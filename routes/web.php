<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminAuthController;

/*
|--------------------------------------------------------------------------
| HALAMAN MENU LANGSUNG
|--------------------------------------------------------------------------
*/

Route::get('/', [MenuController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);

/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminAuthController::class, 'showLogin']);
Route::post('/admin/login', [AdminAuthController::class, 'login']);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

use App\Http\Controllers\AdminController;

Route::get('/admin/logout', [AdminController::class, 'logout']);