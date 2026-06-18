@extends('admin.template')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="section-title-astro mb-0"><i class="fas fa-plus"></i> Tambah Profil Perusahaan</h4>
    <a href="{{ route('admin.company-profile.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card-astro p-4">
    <form action="{{ route('admin.company-profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Nama Perusahaan <span class="text-danger">*</span></label>
                <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}" required>
                @error('company_name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Telepon <span class="text-danger">*</span></label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Alamat <span class="text-danger">*</span></label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" required>
                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 mb-3">
                <label class="form-label fw-bold">Deskripsi <span class="text-danger">*</span></label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4" required>{{ old('description') }}</textarea>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12 mb-3">
                <label class="form-label fw-bold">Logo (Opsional)</label>
                <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror" accept="image/*">
                @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                <small class="text-muted">Format: JPG, PNG, GIF, SVG. Maks 2MB.</small>
            </div>
        </div>
        <button type="submit" class="btn btn-primary-astro">
            <i class="fas fa-save"></i> Simpan
        </button>
    </form>
</div>
@endsection