@extends('admin.template')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
    <h4 class="section-title-astro mb-0"><i class="fas fa-box"></i> Daftar Produk</h4>
    <div>
        <a href="{{ route('admin.products.export-pdf') }}" class="btn btn-danger me-2">
            <i class="fas fa-file-pdf"></i> Export PDF
        </a>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary-astro">
            <i class="fas fa-plus"></i> Tambah Produk
        </a>
    </div>
</div>

<!-- FORM FILTER & PENCARIAN -->
<form method="GET" class="mb-4">
    <div class="row g-3 align-items-end">
        <div class="col-md-4">
            <label class="form-label fw-bold">Cari</label>
            <input type="text" name="search" class="form-control" placeholder="Cari nama atau deskripsi..." value="{{ request('search') }}">
        </div>
        <div class="col-md-3">
            <label class="form-label fw-bold">Filter Stok</label>
            <select name="stock_filter" class="form-select">
                <option value="">Semua Stok</option>
                <option value="low" {{ request('stock_filter') == 'low' ? 'selected' : '' }}>Stok < 10</option>
                <option value="out" {{ request('stock_filter') == 'out' ? 'selected' : '' }}>Stok Habis (0)</option>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary-astro w-100">
                <i class="fas fa-filter"></i> Filter
            </button>
        </div>
        <div class="col-md-2">
            <a href="{{ route('admin.products.index') }}" class="btn btn-outline-astro w-100">
                <i class="fas fa-undo"></i> Reset
            </a>
        </div>
    </div>
</form>

<!-- TABEL -->
<div class="table-responsive">
    <table class="table table-astro table-hover align-middle">
        <thead>
            <tr>
                <th style="width:50px;">#</th>
                <th style="width:100px;">Gambar</th>
                <th>Nama</th>
                <th style="width:150px;">Harga</th>
                <th style="width:80px;">Stok</th>
                <th style="width:150px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $key => $product)
                <tr>
                    <td>{{ $products->firstItem() + $key }}</td>
                    <td>
                        @if($product->image && file_exists(public_path($product->image)))
                            <img src="{{ asset($product->image) }}" class="img-thumbnail" style="width:60px; height:40px; object-fit:cover;" alt="{{ $product->name }}">
                        @else
                            <span class="badge bg-secondary">No Image</span>
                        @endif
                    </td>
                    <td>{{ Str::limit($product->name, 40) }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>
                        @if($product->stock == 0)
                            <span class="badge bg-danger">Habis</span>
                        @elseif($product->stock < 10)
                            <span class="badge bg-warning text-dark">{{ $product->stock }}</span>
                        @else
                            <span class="badge bg-success">{{ $product->stock }}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-muted">Belum ada data produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- PAGINATION -->
<div class="d-flex justify-content-center mt-3">
    {{ $products->links('pagination::bootstrap-5') }}
</div>
@endsection