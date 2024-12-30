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

$user = [];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Nasi Goreng</title>
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

    <!-- Resep Nasi Goreng -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Resep Nasi Goreng Spesial</h2>
        
        <div class="row">
            <!-- Gambar Nasi Goreng -->
            <div class="col-md-6">
                <img src="https://img.kurio.network/4aGEe79XNYxZgi_NwBTqapSCbqs=/440x440/filters:quality(80)/https://kurio-img.kurioapps.com/21/10/12/22d8038d-e873-4660-8637-00787fcffba6.jpe" class="img-fluid" alt="Nasi Goreng">
            </div>

            <!-- Deskripsi dan Bahan -->
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>Nasi Goreng Spesial ini adalah hidangan populer yang sering disajikan untuk sarapan atau makan malam. Dengan bumbu yang kaya dan bahan yang mudah didapat, nasi goreng ini sangat cocok untuk Anda coba di rumah.</p>
                <h4>Bahan-bahan</h4>
                <ul>
                    <li>2 porsi nasi putih dingin</li>
                    <li>2 siung bawang putih, cincang halus</li>
                    <li>1 butir telur</li>
                    <li>100 gram ayam (opsional), potong kecil-kecil</li>
                    <li>2 sendok makan kecap manis</li>
                    <li>1 sendok makan saus tiram</li>
                    <li>1 sendok makan minyak goreng</li>
                    <li>Garam dan merica secukupnya</li>
                    <li>Daun bawang untuk taburan</li>
                </ul>
            </div>
        </div>

        <h4 class="mt-4">Cara Membuat</h4>
        <ol>
            <li>Panaskan minyak goreng di wajan, tumis bawang putih hingga harum.</li>
            <li>Tambahkan ayam (jika menggunakan) dan masak hingga matang.</li>
            <li>Masukkan telur, aduk-aduk hingga telur hancur.</li>
            <li>Tambahkan nasi putih, aduk rata hingga nasi tercampur dengan bumbu.</li>
            <li>Tambahkan kecap manis, saus tiram, garam, dan merica. Aduk kembali hingga merata.</li>
            <li>Masak beberapa menit hingga nasi goreng terasa panas dan bumbu meresap.</li>
            <li>Angkat dan sajikan dengan taburan daun bawang.</li>
        </ol>

        <div class="text-center mt-4">
            <a href="home.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>

    <!-- Script untuk Bootstrap JS (termasuk Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>