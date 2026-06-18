@extends('admin.template')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
    <h4 class="section-title-astro mb-0"><i class="fas fa-building"></i> Profil Perusahaan</h4>
    @if(!$profile)
        <a href="{{ route('admin.company-profile.create') }}" class="btn btn-primary-astro">
            <i class="fas fa-plus"></i> Tambah Profil
        </a>
    @endif
</div>

@if($profile)
    <div class="card-astro p-4">
        <div class="row align-items-center">
            <!-- KOLOM LOGO (DIPERBAIKI AGAR GAMBAR MUNCUL) -->
            <div class="col-md-3 text-center">
                @php
                    $logoPath = $profile->logo ?? '';
                    // Cek apakah file benar-benar ada di folder public
                    $fullPath = public_path($logoPath);
                    $imageExists = !empty($logoPath) && file_exists($fullPath);
                @endphp

                @if($imageExists)
                    <img src="{{ asset($logoPath) }}" 
                         class="img-fluid rounded shadow" 
                         style="max-height:150px; width:auto; object-fit:contain;" 
                         alt="Logo {{ $profile->company_name }}">
                @else
                    <div style="width:150px; height:150px; background:#e9ecef; border-radius:12px; display:flex; align-items:center; justify-content:center; margin:0 auto; color:#6c757d; border:2px dashed #dee2e6;">
                        <i class="fas fa-image fa-3x"></i>
                    </div>
                @endif
            </div>

            <!-- KOLOM INFORMASI PERUSAHAAN -->
            <div class="col-md-9">
                <h4 class="text-primary">{{ $profile->company_name }}</h4>
                <p class="text-muted" style="white-space: pre-line;">{{ $profile->description }}</p>
                
                <div class="row mt-3">
                    <div class="col-md-6">
                        <p><i class="fas fa-map-marker-alt text-primary me-2"></i> <strong>Alamat:</strong><br> {{ $profile->address }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><i class="fas fa-phone text-primary me-2"></i> <strong>Telepon:</strong><br> {{ $profile->phone }}</p>
                    </div>
                    <div class="col-md-12">
                        <p><i class="fas fa-envelope text-primary me-2"></i> <strong>Email:</strong><br> {{ $profile->email }}</p>
                    </div>
                </div>

                <!-- TOMBOL AKSI -->
                <div class="mt-3">
                    <a href="{{ route('admin.company-profile.edit', $profile->id) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('admin.company-profile.destroy', $profile->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus data ini?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <i class="fas fa-info-circle"></i> Belum ada profil perusahaan. Silakan tambahkan data profil.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif
@endsection