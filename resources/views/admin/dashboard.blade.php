@extends('admin.template')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="section-title-astro">Dashboard</h4>
    <p class="text-muted">Selamat datang, {{ Auth::user()->name }}!</p>
</div>

<div class="row g-4">
    <div class="col-md-3">
        <div class="stat-card">
            <div class="d-flex align-items-center">
                <div class="stat-icon blue"><i class="fas fa-newspaper"></i></div>
                <div class="ms-3">
                    <p class="stat-label">Total Artikel</p>
                    <p class="stat-number">{{ $totalArticles }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="d-flex align-items-center">
                <div class="stat-icon green"><i class="fas fa-box"></i></div>
                <div class="ms-3">
                    <p class="stat-label">Total Produk</p>
                    <p class="stat-number">{{ $totalProducts }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="d-flex align-items-center">
                <div class="stat-icon gold"><i class="fas fa-images"></i></div>
                <div class="ms-3">
                    <p class="stat-label">Total Galeri</p>
                    <p class="stat-number">{{ $totalGalleries }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card">
            <div class="d-flex align-items-center">
                <div class="stat-icon teal"><i class="fas fa-building"></i></div>
                <div class="ms-3">
                    <p class="stat-label">Profil Perusahaan</p>
                    <p class="stat-number">{{ $totalProfiles }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection