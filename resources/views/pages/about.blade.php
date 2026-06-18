@extends('layouts.public')

@section('content')
    @php
        $profile = App\Models\CompanyProfile::first();
    @endphp

    <section class="py-5">
        <div class="container">
            <h2 class="section-title-astro text-center">Tentang Astro</h2>

            <!-- Company History & Logo -->
            <div class="row align-items-center mt-5">
                <div class="col-md-5 text-center">
                    @if($profile && $profile->logo && file_exists(public_path($profile->logo)))
                        <img src="{{ asset($profile->logo) }}" class="img-fluid rounded shadow" style="max-height:200px;" alt="Logo {{ $profile->company_name }}">
                    @else
                        <div style="background: linear-gradient(135deg, #0d47a1, #42A5F5); border-radius: 16px; padding: 40px; color:#fff; text-align:center;">
                            <i class="fas fa-store" style="font-size:4rem; color:#ffc107;"></i>
                            <h4 class="mt-3 text-white">{{ $profile->company_name ?? 'Astro' }}</h4>
                        </div>
                    @endif
                </div>
                <div class="col-md-7">
                    @if($profile)
                        <h4>Sejarah Kami</h4>
                        <p>{{ $profile->description }}</p>
                        <p><strong>Alamat:</strong> {{ $profile->address }}</p>
                        <p><strong>Telepon:</strong> {{ $profile->phone }}</p>
                        <p><strong>Email:</strong> {{ $profile->email }}</p>
                    @else
                        <h4>Sejarah Kami</h4>
                        <p>Astro didirikan pada tahun 2021 dengan misi untuk memudahkan masyarakat Indonesia berbelanja kebutuhan sehari-hari. Dengan teknologi dan logistik yang handal, kami mampu mengantarkan pesanan dalam waktu 15 menit.</p>
                        <p>Kami percaya bahwa belanja kebutuhan pokok seharusnya cepat, mudah, dan menyenangkan.</p>
                    @endif
                </div>
            </div>

            <!-- Visi & Misi -->
            <div class="row mt-5 g-4">
                <div class="col-md-6">
                    <div class="card-astro p-4 h-100">
                        <h4><i class="fas fa-eye text-primary me-2"></i> Visi</h4>
                        <p>Menjadi solusi belanja kebutuhan sehari-hari yang terpercaya dan cepat di Indonesia.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-astro p-4 h-100">
                        <h4><i class="fas fa-bullseye text-primary me-2"></i> Misi</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Produk berkualitas, harga terjangkau</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Pengiriman cepat & tepat waktu</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Teknologi untuk kemudahan pelanggan</li>
                            <li><i class="fas fa-check-circle text-primary me-2"></i> Dukung UMKM lokal</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Statistik -->
            <div class="row mt-5 g-4 text-center">
                <div class="col-md-3">
                    <p class="stat-number">3+</p>
                    <p class="stat-label">Tahun Berdiri</p>
                </div>
                <div class="col-md-3">
                    <p class="stat-number">1000+</p>
                    <p class="stat-label">Produk</p>
                </div>
                <div class="col-md-3">
                    <p class="stat-number">5+</p>
                    <p class="stat-label">Kota</p>
                </div>
                <div class="col-md-3">
                    <p class="stat-number">50K+</p>
                    <p class="stat-label">Pelanggan</p>
                </div>
            </div>
        </div>
    </section>
@endsection