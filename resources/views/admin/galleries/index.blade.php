@extends('admin.template')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>🖼️ Daftar Galeri</h3>
        <a href="{{ route('admin.galleries.create') }}" class="btn btn-warning">+ Tambah Galeri</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($galleries as $key => $gallery)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                @if($gallery->image && file_exists(public_path($gallery->image)))
                                    <img src="{{ asset($gallery->image) }}" width="80" height="50" style="object-fit:cover;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $gallery->title }}</td>
                            <td>{{ Str::limit($gallery->description, 50) }}</td>
                            <td class="table-actions">
                                <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center">Belum ada data.</td></tr>
                    @endforelse
                </tbody>
            </table>
            <!-- Paginasi -->
            <div class="d-flex justify-content-center mt-3">
                {{ $galleries->links() }}
            </div>
        </div>
    </div>
@endsection