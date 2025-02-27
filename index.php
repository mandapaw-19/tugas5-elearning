<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Kecantikan</title>
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
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">Selamat Datang di Salon Cantik</h1>
            <p class="lead">Temukan perawatan terbaik untuk kecantikan Anda.</p>
        </div>
    </header>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/perawatanrambut.jpg" class="card-img-top" alt="Layanan 1">
                    <div class="card-body">
                        <h5 class="card-title">Perawatan Rambut</h5>
                        <p class="card-text">Berbagai pilihan perawatan rambut untuk tampilan yang menawan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/perwatanwajah.jpg" class="card-img-top" alt="Layanan 2">
                    <div class="card-body">
                        <h5 class="card-title">Perawatan Wajah</h5>
                        <p class="card-text">Dapatkan kulit wajah yang sehat dan bercahaya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/madikurpedikur.jpg" class="card-img-top" alt="Layanan 3">
                    <div class="card-body">
                        <h5 class="card-title">Manikur & Pedikur</h5>
                        <p class="card-text">Percantik kuku Anda dengan layanan terbaik kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-light text-center py-3">
        <p>&copy; 2025 Manda Fauiziah</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>