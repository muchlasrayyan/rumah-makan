<!DOCTYPE html>
<html>
<head>
    <title>Rumah Makan Padang</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:url('/images/bg-rumah-makan.jpg');
            background-size:cover;
            background-position:center;
            height:100vh;
        }

        .overlay{
            background:rgba(0,0,0,0.5);
            height:100vh;
        }

        nav{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:20px 60px;
            background:rgba(0,0,0,0.4);
        }

        .logo{
            color:orange;
            font-size:35px;
            font-weight:bold;
        }

        nav ul{
            display:flex;
            list-style:none;
            gap:30px;
        }

        nav ul li a{
            color:white;
            text-decoration:none;
            font-size:18px;
            transition:0.3s;
        }

        nav ul li a:hover{
            color:orange;
        }

        .hero{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            text-align:center;
            color:white;
            height:80vh;
            padding:20px;
        }

        .hero h1{
            font-size:70px;
            margin-bottom:20px;
        }

        .hero p{
            font-size:22px;
            width:70%;
            line-height:1.8;
        }

        .btn{
            margin-top:30px;
            padding:15px 40px;
            background:orange;
            color:white;
            border-radius:40px;
            text-decoration:none;
            font-size:20px;
            transition:0.3s;
        }

        .btn:hover{
            background:#ff8800;
            transform:scale(1.05);
        }
    </style>
</head>
<body>

<div class="overlay">

    <nav>
        <div class="logo">🍽 Rumah Makan</div>

        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/admin/login">Admin</a></li>
        </ul>
    </nav>

    <div class="hero">
        <h1>Rumah Makan Padang</h1>

        <p>
            Nikmati cita rasa khas Nusantara dengan menu terbaik,
            lezat, higienis, dan langsung bisa dipesan melalui WhatsApp.
        </p>

        <a href="/menu" class="btn">Lihat Menu</a>
    </div>

</div>

</body>
</html>