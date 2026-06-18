@extends('layouts.public')

@section('content')
    <section class="py-5">
        <div class="container">
            <h2 class="section-title-astro text-center">Artikel & Berita</h2>
            <div class="row mt-4 g-4">
                @php
                    $articles = App\Models\Article::where('status', 'published')->orderBy('created_at', 'desc')->paginate(4);
                @endphp
                @forelse ($articles as $article)
                    <div class="col-md-6">
                        <div class="card-article">
                            @if($article->image && file_exists(public_path($article->image)))
                                <img src="{{ asset($article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                            @else
                                <div class="card-img-top" style="background: linear-gradient(135deg, #0d47a1, #42A5F5); display:flex; align-items:center; justify-content:center; color:white; font-weight:bold; font-size:1.2rem; text-align:center; padding:10px;">
                                    📄 {{ $article->title }}
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $article->content }}</p>
                                <div class="card-footer">
                                    <span class="article-meta"><i class="fas fa-calendar-alt"></i> {{ $article->created_at->format('d M Y') }}</span>
                                    <a href="/articles/{{ $article->id }}" class="btn-readmore">
                                        Baca <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <p class="text-muted">Belum ada artikel.</p>
                    </div>
                @endforelse
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $articles->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>
@endsection