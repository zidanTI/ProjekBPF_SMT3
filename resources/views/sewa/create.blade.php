@extends('dashboard')

@section('content')
    <form action="{{ route('sewa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <p>Input kan Nomor Hp contoh(628xxxxxxxxxx)</p>
            <label for="no_hp">No HP</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_fasilitas">Fasilitas</label>
            <select name="id_fasilitas" class="form-control" required>
                @foreach ($fasilitas as $item)
                    <option value="{{ $item->id_fasilitas }}">{{ $item->nama_paket }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_acara">Tanggal Acara</label>
            <input type="date" name="tanggal_acara" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_acara">Nama Acara</label>
            <input type="text" name="nama_acara" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
