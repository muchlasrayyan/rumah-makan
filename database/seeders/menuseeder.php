<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        DB::table('menus')->insert([
            [
                'nama_menu' => 'Ayam Bakar Madu',
                'deskripsi' => 'Ayam empuk dengan bumbu madu khas.',
                'harga' => 35000,
                'kategori' => 'Makanan',
                'gambar' => 'ayambakarmadu.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Rendang Daging',
                'deskripsi' => 'Daging sapi dengan bumbu rendang autentik.',
                'harga' => 45000,
                'kategori' => 'Makanan',
                'gambar' => 'rendang.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Mie Goreng',
                'deskripsi' => 'Mie goreng dengan sayur dan ayam.',
                'harga' => 22000,
                'kategori' => 'Makanan',
                'gambar' => 'miegoreng.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Es Jeruk',
                'deskripsi' => 'Minuman segar dari jeruk asli.',
                'harga' => 10000,
                'kategori' => 'Minuman',
                'gambar' => 'esjeruk.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Es Teh',
                'deskripsi' => 'Minuman segar.',
                'harga' => 5000,
                'kategori' => 'Minuman',
                'gambar' => 'esteh.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_menu' => 'Teh Manis',
                'deskripsi' => 'Teh hangat atau dingin.',
                'harga' => 8000,
                'kategori' => 'Minuman',
                'gambar' => 'esteh.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}