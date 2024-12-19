@extends('dashboard')

@section('content')
    <div class="container">
        <h2>Tambah Fasilitas</h2>
        <form action="{{ route('fasilitas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_paket">Nama Paket</label>
                <input type="text" class="form-control" id="nama_paket" name="nama_paket" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
