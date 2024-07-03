<!-- resources/views/services.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kami</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
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
            margin-bottom: 20px;
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
            text-align: center;
        }
        .service {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .service h2 {
            color: #4CAF50;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .service p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
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
        <h1>Layanan Kami</h1>
    </header>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/kamar') }}">Cek Kamar</a>
        <a href="{{ url('/services') }}">Services</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/register') }}">Sign Up</a>
    </nav>
    <main>
        <div class="service">
            <h2>Layanan 1</h2>
            <p><b>UGD 24 JAM</b></p>
        </div>
        <div class="service">
            <h2>Layanan 2</h2>
            <p><b>Spealis Organ Dalam</b></p>
        </div>
        <div class="service">
            <h2>Layanan 3</h2>
            <p><b>Dokter Umum</b> </p>
        </div>
        
    </main>
    <footer>
        <p>&copy; 2024 Halaman Services. All rights reserved.</p>
    </footer>
</body>
</html>
