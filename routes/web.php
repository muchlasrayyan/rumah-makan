<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

// Baris ini yang akan memanggil daftar menu rumah makan kamu
Route::get('/', [MenuController::class, 'index']);