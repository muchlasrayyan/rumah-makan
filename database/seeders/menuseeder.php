<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::create([
            'nama_menu' => 'Ayam Bakar Madu',
            'deskripsi' => 'Ayam empuk dengan bumbu madu rahasia.',
            'harga' => 35000,
            'kategori' => 'Makanan'
        ]);

        Menu::create([
            'nama_menu' => 'Es Jeruk Nipis',
            'deskripsi' => 'Segar, dingin, dan asam alami.',
            'harga' => 10000,
            'kategori' => 'Minuman'
        ]);

         Menu::create([
            'nama_menu' => 'Rendang Daging',
            'deskripsi' => 'Daging Sapi Pilihan Dengan Bumbu Rendang Autentik Yang Kaya Rempah.',
            'harga' => 45000,
            'kategori' => 'Makanan'
        ]);
    }
}