@extends('layouts.public')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title-astro text-center">Galeri Kami</h2>
            <p class="text-center text-muted mb-4">Dokumentasi kegiatan dan produk Astro</p>

            <div class="row g-4">
                @php
                    $galleries = App\Models\Gallery::orderBy('created_at', 'desc')->get();
                @endphp

                @forelse ($galleries as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="card-astro h-100">
                            @if($item->image && file_exists(public_path($item->image)))
                                <img src="{{ asset($item->image) }}" 
                                     class="card-img-top" 
                                     style="height:250px; object-fit:cover;" 
                                     alt="{{ $item->title }}">
                            @else
                                <div style="height:250px; background: linear-gradient(135deg, #0d47a1, #42A5F5); display:flex; align-items:center; justify-content:center; color:white; font-weight:bold; font-size:1.2rem;">
                                    <i class="fas fa-image me-2"></i> {{ $item->title }}
                                </div>
                            @endif
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                @if($item->description)
                                    <p class="card-text text-muted">{{ Str::limit($item->description, 100) }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">Belum ada galeri. Silakan tambahkan melalui admin.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection