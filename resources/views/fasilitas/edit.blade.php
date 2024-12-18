@extends('dashboard')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">Edit Data Fasilitas {{ strtoupper($fasilitas->nama_paket) }}</div>
            <div class="card-body">
                <form action="{{ route('fasilitas.update', $fasilitas->id_fasilitas) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <!-- Nama Paket -->
                    <div class="form-group mt-3">
                        <label for="nama_paket">Nama Paket</label>
                        <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" id="nama_paket"
                            name="nama_paket" value="{{ old('nama_paket') ?? $fasilitas->nama_paket }}">
                        <span class="text-danger">{{ $errors->first('nama_paket') }}</span>
                    </div>
                    <!-- Harga -->
                    <div class="form-group mt-3">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga"
                            name="harga" value="{{ old('harga') ?? $fasilitas->harga }}" step="0.01">
                        <span class="text-danger">{{ $errors->first('harga') }}</span>
                    </div>
                    <!-- Tombol Submit -->
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
@endsection
