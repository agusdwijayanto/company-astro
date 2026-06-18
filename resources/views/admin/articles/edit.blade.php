@extends('admin.template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Edit Artikel</h3>
        <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $article->title) }}" required>
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Konten</label>
                    <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="5" required>{{ old('content', $article->content) }}</textarea>
                    @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Gambar Saat Ini</label><br>
                    @if($article->image && file_exists(public_path($article->image)))
                        <img src="{{ asset($article->image) }}" width="150">
                    @else
                        <span class="text-muted">Tidak ada gambar</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label>Ganti Gambar (Opsional)</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="draft" {{ $article->status == 'draft' ? 'selected' : '' }}>Draft</option>
                        <option value="published" {{ $article->status == 'published' ? 'selected' : '' }}>Published</option>
                    </select>
                    @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
@endsection