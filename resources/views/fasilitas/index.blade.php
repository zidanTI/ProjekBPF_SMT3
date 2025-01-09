@extends('dashboard')

@section('content')
    <div class="container">
        <h2>Daftar Fasilitas</h2>

        <!-- Form Pencarian -->
        <form action="{{ route('fasilitas.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari fasilitas..."
                    value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>

        <a href="{{ route('fasilitas.create') }}" class="btn btn-primary mb-3">Tambah Fasilitas</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Paket</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($fasilitas as $item)
                    <tr>
                        <td>{{ $item->id_fasilitas }}</td>
                        <td>{{ $item->nama_paket }}</td>
                        <td>Rp.{{ $item->harga }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <a href="{{ route('fasilitas.edit', $item->id_fasilitas) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('fasilitas.destroy', $item->id_fasilitas) }}" method="POST"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada fasilitas ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
    