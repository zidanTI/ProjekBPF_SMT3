@extends('dashboard')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Fasilitas</h1>

        {{-- Form Tambah Fasilitas --}}
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('fasilitas.store') }}" method="POST">
                    @csrf

                    {{-- Nama Paket --}}
                    <div class="mb-3">
                        <label for="nama_paket" class="form-label">Nama Paket:</label>
                        <input type="text" id="nama_paket" name="nama_paket" class="form-control"
                            placeholder="Masukkan nama paket" required>
                    </div>

                    {{-- Harga --}}
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga:</label>
                        <input type="number" id="harga" name="harga" class="form-control" step="0.01"
                            placeholder="Masukkan harga" required>
                    </div>

                    {{-- Tombol Simpan --}}
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
