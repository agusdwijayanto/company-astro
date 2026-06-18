@extends('layouts.public')

@section('content')
    <!-- HERO -->
    <section class="hero-astro">
        <div class="container position-relative">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1><i class="fas fa-rocket"></i> Astro</h1>
                    <p class="lead">Belanja Kebutuhan Sehari-hari. Cepat & Mudah.</p>
                    <p class="mb-4 text-white-50">Dikirim dalam 15 menit, 24 jam sehari, 7 hari seminggu.</p>
                    <a href="/products" class="btn-hero">
                        <i class="fas fa-shopping-bag"></i> Belanja Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUK UNGGULAN -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title-astro text-center">Produk Unggulan</h2>
            <div class="row mt-4">
                @php
                    $products = App\Models\Product::orderBy('created_at', 'desc')->take(3)->get();
                @endphp
                @forelse ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card-astro h-100">
                            @if($product->image && file_exists(public_path($product->image)))
                                <img src="{{ asset($product->image) }}" class="card-img-top" style="height:220px; object-fit:cover;" alt="{{ $product->name }}">
                            @else
                                <div style="height:220px; background: linear-gradient(135deg, #0d47a1, #42A5F5); display:flex; align-items:center; justify-content:center; color:white; font-weight:bold; font-size:1.2rem;">
                                    <i class="fas fa-box me-2"></i> {{ $product->name }}
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($product->description, 80) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-bold text-primary">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                    <span class="badge bg-warning text-dark"><i class="fas fa-clock"></i> Cepat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">Belum ada produk.</p>
                    </div>
                @endforelse
            </div>
            <div class="text-center mt-4">
                <a href="/products" class="btn-primary-astro">Lihat Semua Produk</a>
            </div>
        </div>
    </section>
@endsection