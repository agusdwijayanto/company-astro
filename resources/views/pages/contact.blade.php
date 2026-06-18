@extends('layouts.public')

@section('content')
    @php
        $profile = App\Models\CompanyProfile::first();
    @endphp

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title-astro text-center">Hubungi Kami</h2>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-8">
                    <div class="card-astro p-4">
                        <div class="row g-4">
                            @if($profile)
                                <div class="col-md-6">
                                    <p><i class="fas fa-map-marker-alt text-primary me-2"></i> <strong>Alamat</strong></p>
                                    <p>{{ $profile->address }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><i class="fas fa-phone text-primary me-2"></i> <strong>Telepon</strong></p>
                                    <p>{{ $profile->phone }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><i class="fas fa-envelope text-primary me-2"></i> <strong>Email</strong></p>
                                    <p>{{ $profile->email }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><i class="fas fa-clock text-primary me-2"></i> <strong>Jam Operasional</strong></p>
                                    <p>Senin - Jumat: 08.00 - 20.00</p>
                                    <p>Sabtu - Minggu: 09.00 - 17.00</p>
                                </div>
                            @else
                                <div class="col-12 text-center">
                                    <p class="text-muted">Data kontak belum diisi. Silakan tambahkan melalui admin.</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection