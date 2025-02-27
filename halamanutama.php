<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Salon Cantik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Salon Kecantikan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengaturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Selamat Datang, Manda</h2>
        <p>Ini adalah halaman dashboard Anda. Anda dapat melihat dan mengelola informasi akun, serta melakukan pemesanan layanan.</p>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/reservasilayanan.jpg" class="card-img-top" alt="Reservasi">
                    <div class="card-body">
                        <h5 class="card-title">Reservasi Layanan</h5>
                        <p class="card-text">Pesan layanan favorit Anda dengan mudah.</p>
                        <a href="#" class="btn btn-pink">Buat Reservasi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/riwayatreservasi.jpg" class="card-img-top" alt="Riwayat">
                    <div class="card-body">
                        <h5 class="card-title">Riwayat Reservasi</h5>
                        <p class="card-text">Lihat riwayat pemesanan layanan Anda.</p>
                        <a href="#" class="btn btn-pink">Lihat Riwayat</a>
                    </div>
                </div>
            </div>
             <div class="col-md-4">
                <div class="card">
                    <img src="assets/promomenarik.jpg" class="card-img-top" alt="Promo">
                    <div class="card-body">
                        <h5 class="card-title">Promo Menarik</h5>
                        <p class="card-text">Dapatkan berbagai promo menarik dari kami.</p>
                        <a href="#" class="btn btn-pink">Lihat Promo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>