@extends('admin.template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Edit Galeri</h3>
        <a href="{{ route('admin.galleries.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>Judul</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $gallery->title) }}" required>
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Deskripsi (Opsional)</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{ old('description', $gallery->description) }}</textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label>Gambar Saat Ini</label><br>
                    @if($gallery->image && file_exists(public_path($gallery->image)))
                        <img src="{{ asset($gallery->image) }}" width="150">
                    @else
                        <span class="text-muted">Tidak ada gambar</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label>Ganti Gambar (Opsional)</label>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
@endsection