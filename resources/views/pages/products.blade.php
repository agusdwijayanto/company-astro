@extends('layouts.public')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title-astro text-center">Semua Produk</h2>
            <div class="row mt-4 g-4">
                @php
                    $products = App\Models\Product::orderBy('created_at', 'desc')->get();
                @endphp
                @forelse ($products as $product)
                    <div class="col-md-4 col-sm-6">
                        <div class="card-product">
                            @if($product->image && file_exists(public_path($product->image)))
                                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            @else
                                <div class="card-img-top" style="background: linear-gradient(135deg, #0d47a1, #42A5F5); display:flex; align-items:center; justify-content:center; color:white; font-weight:bold; font-size:1.2rem;">
                                    <i class="fas fa-box me-2"></i> {{ $product->name }}
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="card-footer">
                                    <span class="price-tag">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                    <span class="badge-stock"><i class="fas fa-box"></i> {{ $product->stock }}</span>
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
        </div>
    </section>
@endsection