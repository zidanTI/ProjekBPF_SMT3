@extends('dashboard')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Daftar Fasilitas</h1>

        <a href="{{ route('fasilitas.create') }}" class="btn btn-primary mb-3">Tambah Fasilitas</a>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-bordered text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Paket</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitas as $item)
                        <tr>
                            <td>{{ $item->nama_paket }}</td>
                            <td>Rp {{ number_format($item->harga, 2, ',', '.') }}</td>
                            <td>
                                <a href="{{ route('fasilitas.edit', $item->id_fasilitas) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('fasilitas.destroy', $item->id_fasilitas) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?');">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
