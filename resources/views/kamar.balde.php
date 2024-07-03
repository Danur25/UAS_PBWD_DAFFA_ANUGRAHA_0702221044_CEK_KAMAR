<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Kamar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        main {
            padding: 20px;
        }
        .kamar {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            margin: 10px 0;
            background-color: #f9f9f9;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Informasi Kamar</h1>
    </header>
    <nav>
        <a href="{{ route('index') }}">Home</a>
        <a href="{{ route('cekkamar') }}">Cek Kamar</a>
        <a href="{{ route('services') }}">Services</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('register') }}">Sign Up</a>
    </nav>
    <main>
        <div class="kamar">
            <h2>Kamar 101</h2>
            <p>Status: Tersedia</p>
            <p>Deskripsi: Kamar dengan satu tempat tidur, AC, dan kamar mandi dalam.</p>
            <a href="{{ route('pesan.kamar', ['nomor' => 101]) }}">Pesan Kamar</a>
        </div>
        <div class="kamar">
            <h2>Kamar 102</h2>
            <p>Status: Tidak Tersedia</p>
            <p>Deskripsi: Kamar sedang dalam perbaikan.</p>
        </div>
        <!-- Tambahkan lebih banyak informasi kamar sesuai kebutuhan -->
    </main>
    <footer>
        <p>&copy; 2024 Rumah Sakit GalaxY-Danur. All rights reserved.</p>
    </footer>
</body>
</html>
