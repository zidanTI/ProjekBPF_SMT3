@extends('landingBaru')

@section('content')
    <div class="container">
        <h2>Daftar Fasilitas</h2>
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
                @foreach ($fasilitas as $item)
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
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
