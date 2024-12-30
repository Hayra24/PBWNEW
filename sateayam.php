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
    <title>Resep Sate Ayam</title>
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

    
    <!-- Resep Sate Ayam -->
    <div class="container py-5">
        <h2 class="text-center mb-4">Resep Sate Ayam Spesial</h2>
        
        <div class="row">
            <!-- Gambar Sate Ayam -->
            <div class="col-md-6">
                <img src="https://asset.kompas.com/crops/BJdOTeUCdwHWS6ImI9qDnf3s8nI=/0x0:1000x667/1200x800/data/photo/2023/12/19/6580e31d4d33e.jpeg" class="img-fluid" alt="Sate Ayam">
            </div>

            <!-- Deskripsi dan Bahan -->
            <div class="col-md-6">
                <h4>Deskripsi</h4>
                <p>Sate Ayam adalah salah satu makanan Indonesia yang sangat populer. Daging ayam yang dipotong kecil dan dibumbui, lalu dipanggang dengan arang, menjadikan sate ayam pilihan yang lezat untuk berbagai acara atau makan malam bersama keluarga.</p>
                <h4>Bahan-bahan</h4>
                <ul>
                    <li>500 gram dada ayam, potong dadu kecil</li>
                    <li>10 batang tusuk sate</li>
                    <li>2 siung bawang putih, haluskan</li>
                    <li>3 sendok makan kecap manis</li>
                    <li>2 sendok makan minyak goreng</li>
                    <li>1 sendok teh ketumbar bubuk</li>
                    <li>1 sendok teh garam</li>
                    <li>1 sendok teh merica bubuk</li>
                    <li>1 sendok makan air jeruk nipis</li>
                    <li>Daun bawang untuk taburan (opsional)</li>
                    <li>2 sendok makan kacang tanah, haluskan (untuk sambal kacang)</li>
                    <li>2 sendok makan kecap manis (untuk sambal kacang)</li>
                    <li>1 sendok teh air asam jawa (untuk sambal kacang)</li>
                    <li>1 sendok teh gula merah, serut (untuk sambal kacang)</li>
                    <li>Garam secukupnya (untuk sambal kacang)</li>
                </ul>
            </div>
        </div>

        <h4 class="mt-4">Cara Membuat</h4>
        <ol>
            <li>Campurkan potongan ayam dengan bawang putih, kecap manis, minyak goreng, ketumbar, garam, merica, dan air jeruk nipis. Aduk rata dan diamkan selama 30 menit untuk meresap.</li>
            <li>Tusukkan ayam ke tusuk sate satu per satu, rapatkan dengan jarak yang cukup agar tidak terlalu padat.</li>
            <li>Panggang sate di atas bara api atau panggangan hingga matang dan berwarna kecoklatan. Sering-sering dibalik agar matang merata.</li>
            <li>Untuk sambal kacang: Campurkan kacang tanah halus, kecap manis, air asam jawa, gula merah, dan garam. Aduk rata hingga menjadi saus sambal kacang yang kental.</li>
            <li>Setelah sate matang, sajikan dengan sambal kacang dan taburan daun bawang.</li>
        </ol>

        <div class="text-center mt-4">
            <a href="home.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>

    <!-- Script untuk Bootstrap JS (termasuk Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
