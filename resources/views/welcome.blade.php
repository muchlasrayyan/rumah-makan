<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!DOCTYPE html>
<html>
<head>
    <title>Rumah Makan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        /* RESET */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url("{{ asset('images/bg-rumah-makan.jpg') }}") no-repeat center center fixed;
            background-size: cover;
        }

        /* LOADING */
        #loader {
            position: fixed;
            width: 100%;
            height: 100%;
            background: #111;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #fff;
            border-top: 5px solid orange;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            100% { transform: rotate(360deg); }
        }

        /* OVERLAY */
        .overlay {
            background: rgba(0,0,0,0.6);
            min-height: 100vh;
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
            background: rgba(0,0,0,0.8);
            color: white;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            color: orange;
        }

        .nav-links a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
        }

        .nav-links a:hover {
            color: orange;
        }

        /* TITLE */
        h2 {
            text-align: center;
            color: white;
            margin-top: 20px;
        }

        /* MENU */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .card {
            width: 280px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .kategori {
            background: #ffe0c2;
            color: #ff7a00;
            padding: 4px 10px;
            border-radius: 10px;
            font-size: 12px;
        }

        .nama {
            margin: 10px 0 5px;
        }

        .deskripsi {
            font-size: 14px;
            color: #666;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .harga {
            color: green;
            font-weight: bold;
        }

        .btn {
            background: #25D366;
            color: white;
            padding: 7px 12px;
            border-radius: 8px;
            text-decoration: none;
        }

        .btn:hover {
            background: #1ebe5d;
        }
    </style>
</head>

<body>

<!-- LOADING -->
<div id="loader">
    <div class="spinner"></div>
</div>

<div class="overlay">

    <!-- NAVBAR -->
    <div class="navbar">
        <div class="logo">🍽️ Rumah Makan Padang</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Menu</a>
            <a href="#">Kontak</a>
        </div>
    </div>

    <!-- TITLE -->
    <h2>Daftar Menu Kami</h2>

    <!-- MENU -->
    <div class="container">

        @foreach ($menus as $menu)
        <div class="card">

            <img src="{{ asset($menu->gambar) }}">

            <div class="card-body">

                <span class="kategori">{{ $menu->kategori }}</span>

                <h3 class="nama">{{ $menu->nama_menu }}</h3>

                <p class="deskripsi">{{ $menu->deskripsi }}</p>

                <div class="footer">
                    <span class="harga">
                        Rp {{ number_format($menu->harga, 0, ',', '.') }}
                    </span>

                    <a href="https://wa.me/6289519118068?text=Saya ingin pesan {{ urlencode($menu->nama_menu) }}" 
                       target="_blank"
                       class="btn">
                        Pesan
                    </a>
                </div>

            </div>

        </div>
        @endforeach

    </div>

</div>

<!-- SCRIPT LOADING -->
<script>
    window.onload = function(){
        document.getElementById("loader").style.display = "none";
    }
</script>

</body>
</html>