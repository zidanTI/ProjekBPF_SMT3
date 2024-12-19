@extends('dashboard')

@section('content')
    <div class="container">
        <h2>Edit Fasilitas</h2>
        <form action="{{ route('fasilitas.update', $fasilitas->id_fasilitas) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_paket">Nama Paket</label>
                <input type="text" class="form-control" id="nama_paket" name="nama_paket" value="{{ $fasilitas->nama_paket }}" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ $fasilitas->harga }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $fasilitas->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
