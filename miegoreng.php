<?php
session_start();
include "connection.php";

// Cek apakah pengguna sudah login
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: login.php"); // Redirect ke login jika tidak login
    exit();
}

// Ambil data pengguna dari sesi
$username = $_SESSION['username'];
$email = ''; // Variabel untuk email
$password = ''; // Variabel untuk password (hanya akan diupdate)
$updateSuccess = false;
$errorMessage = '';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Mie Goreng</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">RUMAH RESEP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="artikel.html">Article</a>
                    </li>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Resep Mie Goreng -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Resep Mie Goreng Spesial</h2>
        
        <div class="row">
            <!-- Gambar Mie Goreng -->
            <div class="col-md-6">
                <img src="https://cdn0-production-images-kly.akamaized.net/-QqntF9wXQHNZzxkDK9IEs0E_NI=/1200x900/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4162951/original/017212600_1663563648-shutterstock_2159757881.jpg" class="img-fluid" alt="Mie Goreng">
            </div>

            <!-- Deskripsi dan Bahan -->
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>Mie Goreng Spesial ini adalah salah satu hidangan favorit yang bisa disajikan kapan saja. Dengan bumbu yang lezat dan bahan yang mudah ditemukan, mie goreng ini sangat cocok untuk makan siang atau makan malam.</p>
                <h4>Bahan-bahan</h4>
                <ul>
                    <li>2 bungkus mie instan</li>
                    <li>1 butir telur</li>
                    <li>1 siung bawang putih, cincang halus</li>
                    <li>2 sendok makan kecap manis</li>
                    <li>1 sendok makan saus sambal (opsional)</li>
                    <li>2 sendok makan minyak goreng</li>
                    <li>Sayuran (selada, kol, atau wortel) sesuai selera</li>
                    <li>Garam dan merica secukupnya</li>
                    <li>Daun bawang untuk taburan</li>
                </ul>
            </div>
        </div>

        <h4 class="mt-4">Cara Membuat</h4>
        <ol>
            <li>Rebus mie instan hingga matang, tiriskan dan sisihkan.</li>
            <li>Panaskan minyak goreng di wajan, tumis bawang putih hingga harum.</li>
            <li>Masukkan telur, orak-arik hingga setengah matang.</li>
            <li>Tambahkan mie yang sudah direbus, aduk rata.</li>
            <li>Tambahkan kecap manis, saus sambal (jika menggunakan), garam, dan merica. Aduk kembali hingga bumbu merata.</li>
            <li>Masak selama beberapa menit hingga mie goreng terasa panas dan bumbu meresap.</li>
            <li>Angkat dan sajikan dengan taburan daun bawang dan sayuran pilihan.</li>
        </ol>

        <div class="text-center mt-4">
            <a href="home.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>

    <!-- Script untuk Bootstrap JS (termasuk Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
