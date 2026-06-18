<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* FIX LAYOUT ADMIN */
        body {
            background: #f5f7fa;
            overflow-x: hidden;
        }
        .sidebar-astro {
            height: 100vh;
            width: 260px;
            position: fixed;
            top: 0;
            left: 0;
            background: #0d47a1;
            padding: 20px 0;
            overflow-y: auto;
            z-index: 1050;
            transition: all 0.3s;
        }
        .sidebar-astro .sidebar-brand {
            color: #fff;
            font-weight: 800;
            font-size: 1.4rem;
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 15px;
        }
        .sidebar-astro .sidebar-brand i {
            color: #ffc107;
        }
        .sidebar-astro .nav-link {
            color: rgba(255,255,255,0.7);
            padding: 12px 24px;
            border-left: 3px solid transparent;
            transition: 0.3s;
            display: block;
            text-decoration: none;
        }
        .sidebar-astro .nav-link:hover,
        .sidebar-astro .nav-link.active {
            color: #fff;
            background: rgba(255,255,255,0.1);
            border-left-color: #ffc107;
        }
        .sidebar-astro .nav-link i {
            width: 22px;
            margin-right: 12px;
        }
        .sidebar-astro .logout-link {
            border-top: 1px solid rgba(255,255,255,0.1);
            margin-top: 15px;
            padding-top: 15px;
        }
        .main-content {
            margin-left: 260px;
            padding: 20px 30px;
            min-height: 100vh;
        }
        .navbar-top-astro {
            background: #fff;
            padding: 15px 25px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar-top-astro .brand-text {
            font-weight: 700;
            color: #0d47a1;
        }
        .navbar-top-astro .user-info {
            font-weight: 500;
            color: #6c757d;
        }
        @media (max-width: 768px) {
            .sidebar-astro {
                width: 100%;
                height: auto;
                position: relative;
            }
            .main-content {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar-astro">
        <div class="sidebar-brand">
            <i class="fas fa-rocket"></i> Astro Admin
        </div>
        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="{{ route('admin.articles.index') }}" class="nav-link {{ request()->routeIs('admin.articles.*') ? 'active' : '' }}">
            <i class="fas fa-newspaper"></i> Artikel
        </a>
        <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
            <i class="fas fa-box"></i> Produk
        </a>
        <a href="{{ route('admin.galleries.index') }}" class="nav-link {{ request()->routeIs('admin.galleries.*') ? 'active' : '' }}">
            <i class="fas fa-images"></i> Galeri
        </a>
        <a href="{{ route('admin.company-profile.index') }}" class="nav-link {{ request()->routeIs('admin.company-profile.*') ? 'active' : '' }}">
            <i class="fas fa-building"></i> Profil Perusahaan
        </a>
        <!-- EXPORT PDF SUDAH DIHAPUS DARI SINI -->
        <form method="POST" action="{{ route('admin.logout') }}" class="logout-link">
            @csrf
            <button type="submit" class="nav-link" style="background:transparent; border:none; width:100%; text-align:left; cursor:pointer;">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">

        <!-- TOP NAVBAR -->
        <div class="navbar-top-astro">
            <span class="brand-text"><i class="fas fa-user-cog"></i> Panel Admin</span>
            <span class="user-info">
                <i class="fas fa-user-circle"></i> {{ Auth::user()->name ?? 'Admin' }}
            </span>
        </div>

        <!-- NOTIFIKASI -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- KONTEN UTAMA -->
        @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>