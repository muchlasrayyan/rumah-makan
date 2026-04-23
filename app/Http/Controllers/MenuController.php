<?php

namespace App\Http\Controllers;

use App\Models\Menu; // Menghubungkan ke model Menu
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel menus
        $menus = Menu::all(); 
        
        // Mengirim data $menus ke file view welcome.blade.php
        return view('welcome', compact('menus'));
    }
}
