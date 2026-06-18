@extends('layouts.public')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <a href="/articles" class="btn-outline-astro btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>

                    <h1 class="section-title-astro mt-4">{{ $article->title }}</h1>
                    <p class="text-muted">
                        <i class="fas fa-calendar-alt"></i> {{ $article->created_at->format('d M Y') }}
                        <span class="badge bg-warning text-dark ms-2">{{ $article->status }}</span>
                    </p>

                    @if($article->image && file_exists(public_path($article->image)))
                        <img src="{{ asset($article->image) }}" class="img-fluid rounded-4 shadow mb-4" style="width:100%; max-height:400px; object-fit:cover;">
                    @else
                        <div style="width:100%; height:300px; background: linear-gradient(135deg, #0d47a1, #42A5F5); border-radius:16px; display:flex; align-items:center; justify-content:center; color:white; font-weight:bold; font-size:1.5rem; margin-bottom:20px;">
                            📄 {{ $article->title }}
                        </div>
                    @endif

                    <div class="card-astro p-4">
                        <p style="white-space: pre-line; line-height:1.8;">{{ $article->content }}</p>
                    </div>

                    <div class="text-center mt-4">
                        <a href="/articles" class="btn-primary-astro">
                            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Artikel
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection