@extends('admin.template')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
    <h4 class="section-title-astro mb-0"><i class="fas fa-newspaper"></i> Daftar Artikel</h4>
    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary-astro">
        <i class="fas fa-plus"></i> Tambah Artikel
    </a>
</div>

<!-- FORM FILTER & PENCARIAN (DIPERBAIKI PAKAI ROW) -->
<form method="GET" class="mb-4">
    <div class="row g-3 align-items-end">
        <div class="col-md-4">
            <label class="form-label fw-bold">Cari</label>
            <input type="text" name="search" class="form-control" placeholder="Cari judul atau konten..." value="{{ request('search') }}">
        </div>
        <div class="col-md-3">
            <label class="form-label fw-bold">Status</label>
            <select name="status" class="form-select">
                <option value="">Semua Status</option>
                <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Published</option>
                <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary-astro w-100">
                <i class="fas fa-filter"></i> Filter
            </button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('admin.articles.index') }}" class="btn btn-outline-astro w-100">
                <i class="fas fa-undo"></i> Reset
            </a>
        </div>
    </div>
</form>

<!-- TABEL (DIBUNGKUS RESPONSIVE) -->
<div class="table-responsive">
    <table class="table table-astro table-hover align-middle">
        <thead>
            <tr>
                <th style="width:50px;">#</th>
                <th style="width:100px;">Gambar</th>
                <th>Judul</th>
                <th style="width:120px;">Status</th>
                <th style="width:180px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($articles as $key => $article)
                <tr>
                    <td>{{ $articles->firstItem() + $key }}</td>
                    <td>
                        @if($article->image && file_exists(public_path($article->image)))
                            <img src="{{ asset($article->image) }}" class="img-thumbnail" style="width:60px; height:40px; object-fit:cover;" alt="{{ $article->title }}">
                        @else
                            <span class="badge bg-secondary">No Image</span>
                        @endif
                    </td>
                    <td>{{ Str::limit($article->title, 50) }}</td>
                    <td>
                        <span class="badge {{ $article->status == 'published' ? 'bg-success' : 'bg-secondary' }}">
                            {{ $article->status }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">Belum ada data artikel.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- PAGINATION -->
<div class="d-flex justify-content-center mt-3">
    {{ $articles->links('pagination::bootstrap-5') }}
</div>
@endsection