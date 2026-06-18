<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astro - Toko Kebutuhan Sehari-hari</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- CSS KUSTOM -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Navbar Biru -->
    <nav class="navbar navbar-expand-lg navbar-astro">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-rocket"></i> Astro
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/"><i class="fas fa-home"></i> Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about"><i class="fas fa-info-circle"></i> Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="/products"><i class="fas fa-box"></i> Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="/articles"><i class="fas fa-newspaper"></i> Artikel</a></li>
                    <!-- GALERI SUDAH DITAMBAHKAN DI SINI -->
                    <li class="nav-item"><a class="nav-link" href="/gallery"><i class="fas fa-images"></i> Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact"><i class="fas fa-envelope"></i> Kontak</a></li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light btn-sm px-3 ms-2" href="/admin/login">
                            <i class="fas fa-user-lock"></i> Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container-fluid p-0">
        @yield('content')
    </div>

    <!-- Footer Biru -->
    <footer class="footer-astro">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5><i class="fas fa-rocket text-warning"></i> Astro</h5>
                    <p>Belanja kebutuhan sehari-hari cepat & mudah. Dikirim dalam 15 menit!</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/about">Tentang</a></li>
                        <li><a href="/products">Produk</a></li>
                        <li><a href="/articles">Artikel</a></li>
                        <li><a href="/gallery">Galeri</a></li>
                        <li><a href="/contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Hubungi Kami</h5>
                    <p><i class="fas fa-map-marker-alt text-warning"></i> Jl. Astro No. 123, Jakarta</p>
                    <p><i class="fas fa-phone text-warning"></i> (021) 1234-5678</p>
                    <p><i class="fas fa-envelope text-warning"></i> info@astro.com</p>
                </div>
            </div>
            <div class="copyright text-center">
                &copy; {{ date('Y') }} Astro. All rights reserved. | Dibangun dengan Laravel
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>