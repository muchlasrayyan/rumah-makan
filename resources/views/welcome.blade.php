<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Makan Sedap</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero-bg {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                              url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
        }

    </style>
</head>
<body class="bg-gray-100 font-sans">

    <header class="hero-bg h-[400px] flex items-center justify-center text-center text-white">
        <div>
            <h1 class="text-5xl font-bold mb-4 uppercase tracking-wider">Rumah Makan Sedap</h1>
            <p class="text-xl italic">"Rasa Bintang Lima, Harga Kaki Lima"</p>
        </div>
    </header>

    <main class="container mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Daftar Menu Kami</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Loop untuk menampilkan data dari database --}}
            @forelse($menus as $menu)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-2xl transition duration-300">
                <div class="p-6">
                    <span class="text-xs font-bold bg-orange-100 text-orange-600 px-2 py-1 rounded-full uppercase">{{ $menu->kategori }}</span>
                    <h3 class="text-xl font-bold text-gray-900 mt-3">{{ $menu->nama_menu }}</h3>
                    <p class="text-gray-600 mt-2 text-sm">{{ $menu->deskripsi }}</p>
                    <div class="mt-5 flex justify-between items-center border-t pt-4">
                        <span class="text-xl font-bold text-green-600">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                        <a href="https://wa.me/6289519118068?text=Saya mau pesan {{ $menu->nama_menu }}" 
   class="bg-orange-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-orange-600">
   Pesan
</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-10">
                <p class="text-gray-500">Ups! Belum ada menu. Coba jalankan seeder lagi.</p>
            </div>
            @endforelse
        </div>
    </main>

    <footer class="bg-gray-900 text-gray-400 py-8 text-center">
        <p>&copy; 2026 Rumah Makan Sedap - Dibuat dengan Laravel</p>
    </footer>

</body>
</html>