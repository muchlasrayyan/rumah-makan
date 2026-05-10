<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Makan Padang</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f5f5f5;
        }

        /* HERO SECTION */
        .hero{
            height:100vh;
            background:
            linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
            url("{{ asset('images/bg-rumah-makan.jpg') }}");

            background-size:cover;
            background-position:center;
            color:white;
        }

        /* NAVBAR */
        .navbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:20px 50px;
            background:rgba(0,0,0,0.3);
            position:fixed;
            width:100%;
            z-index:999;
            backdrop-filter: blur(10px);
        }

        .logo{
            font-size:28px;
            font-weight:bold;
            color:orange;
        }

        .menu-nav a{
            color:white;
            text-decoration:none;
            margin-left:20px;
            transition:0.3s;
        }

        .menu-nav a:hover{
            color:orange;
        }

        /* HERO CONTENT */
        .hero-content{
            height:100%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            text-align:center;
            padding:20px;
        }

        .hero-content h1{
            font-size:60px;
            margin-bottom:20px;
        }

        .hero-content p{
            max-width:700px;
            line-height:1.8;
            margin-bottom:30px;
        }

        .hero-content a{
            background:orange;
            color:white;
            padding:15px 30px;
            border-radius:50px;
            text-decoration:none;
            transition:0.3s;
        }

        .hero-content a:hover{
            background:#ff8800;
            transform:scale(1.05);
        }

        /* MENU SECTION */
        .menu-section{
            padding:80px 50px;
        }

        .title{
            text-align:center;
            margin-bottom:50px;
        }

        .title h2{
            font-size:40px;
            color:#333;
        }

        /* CARD */
        .container{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
            gap:30px;
        }

        .card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 25px rgba(0,0,0,0.1);
            transition:0.4s;
        }

        .card:hover{
            transform:translateY(-10px);
        }

        .card img{
            width:100%;
            height:220px;
            object-fit:cover;
        }

        .card-body{
            padding:20px;
        }

        .kategori{
            background:#ffe0c2;
            color:#ff7a00;
            padding:5px 12px;
            border-radius:20px;
            font-size:12px;
        }

        .card-body h3{
            margin:15px 0 10px;
            color:#222;
        }

        .deskripsi{
            color:#666;
            font-size:14px;
            line-height:1.6;
        }

        .footer{
            margin-top:20px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .harga{
            color:green;
            font-size:18px;
            font-weight:bold;
        }

        .btn{
            background:#25D366;
            color:white;
            text-decoration:none;
            padding:10px 18px;
            border-radius:10px;
            transition:0.3s;
        }

        .btn:hover{
            background:#1ebe5d;
        }

        /* FOOTER */
        footer{
            background:#111;
            color:white;
            text-align:center;
            padding:30px;
            margin-top:50px;
        }

        /* RESPONSIVE */
        @media(max-width:768px){

            .navbar{
                padding:15px 20px;
            }

            .hero-content h1{
                font-size:40px;
            }

            .menu-section{
                padding:60px 20px;
            }

        }

    </style>
</head>

<body>

<!-- HERO -->
<div class="hero">

    <!-- NAVBAR -->
    <div class="navbar">

        <div class="logo">
            🍽️ Rumah Makan
        </div>

        <div class="menu-nav">
            <a href="#">Home</a>
            <a href="#menu">Menu</a>
            <a href="/admin/login">Admin</a>
        </div>

    </div>

    <!-- HERO CONTENT -->
    <div class="hero-content">

        <h1>Rumah Makan Padang</h1>

        <p>
            Nikmati cita rasa khas Nusantara dengan menu terbaik,
            lezat, higienis, dan langsung bisa dipesan melalui WhatsApp.
        </p>

        <a href="#menu">Lihat Menu</a>

    </div>

</div>

<!-- MENU -->
<section class="menu-section" id="menu">

    <div class="title">
        <h2>Menu Favorit Kami</h2>
    </div>

    <div class="container">

        @foreach ($menus as $menu)

        <div class="card">

            <img src="{{ asset($menu->gambar) }}" alt="">

            <div class="card-body">

                <span class="kategori">
                    {{ $menu->kategori }}
                </span>

                <h3>{{ $menu->nama_menu }}</h3>

                <p class="deskripsi">
                    {{ $menu->deskripsi }}
                </p>

                <div class="footer">

                    <div class="harga">
                        Rp {{ number_format($menu->harga,0,',','.') }}
                    </div>

                    <a 
                    href="https://wa.me/6289519118068?text=Saya ingin pesan {{ urlencode($menu->nama_menu) }}"
                    target="_blank"
                    class="btn">

                        Pesan

                    </a>

                </div>

            </div>

        </div>

        @endforeach

    </div>

</section>

<!-- FOOTER -->
<footer>

    <h3>🍽️ Rumah Makan Padang</h3>

    <p>
        © 2026 All Rights Reserved
    </p>

</footer>

</body>
</html>