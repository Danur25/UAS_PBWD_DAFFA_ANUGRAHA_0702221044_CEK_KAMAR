<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
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
        .team-member {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            margin: 10px 0;
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
        <h1>Tentang Kami</h1>
    </header>
    <nav>
    <a href="{{ url('/') }}"></a>
        <a href="{{ url('home') }}">home</a>
        <a href="{{ url('kamar') }}">Cek Kamar</a>
        <a href="{{ url('/services') }}">Services</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/register') }}">Sign Up</a>
    </nav>
    <main>
        <h2>Sejarah Perusahaan</h2>
        <p>Rumah Sakit ini didirikan pada tahun 2024 dengan tujuan untuk memberikan pertolongan terhadap para masyarakat dengan gratis. Rumah Sakit berharap pada pemerintah agar meu bekerja sama dengan kami dalam menjalankan tugas ini</p>
        
        <h2>Visi dan Misi</h2>
        <p><strong>Visi:</strong> Menjadi malaikat yang akan menolong kalian dengan memberikan layanan terbaik kepada ppasien kami.</p>
        <p><strong>Misi:</strong> 
            <ul>
                <li>Menyediakan layanan berkualitas tinggi.</li>
                <li>Mengutamakan kepentingan pasien.</li>
                <li>Berinovasi terus menerus untuk memenuhi ekspetasi masyarakat.</li>
            </ul>
        </p>

        <h2>Tim Kami</h2>
        <div class="team-member">
            <h3>Nama Anggota 1</h3>
            <p>Jabatan: [Jabatan]</p>
            <p>Deskripsi: [Deskripsi singkat tentang anggota tim ini]</p>
        </div>
        <div class="team-member">
            <h3>Nama Anggota 2</h3>
            <p>Jabatan: [Jabatan]</p>
            <p>Deskripsi: [Deskripsi singkat tentang anggota tim ini]</p>
        </div>
        <!-- Tambahkan anggota tim lainnya sesuai kebutuhan -->
    </main>
    <footer>
        <p>&copy; Rumah Sakit GalaxY -Danur2507</p>
    </footer>
</body>
</html>
