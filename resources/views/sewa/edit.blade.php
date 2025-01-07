@extends('dashboard')

@section('content')
    <h2>Edit Booking</h2>
    <form action="{{ route('sewa.update', $sewa->id_booking) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $sewa->customer->nama }}" required>
        </div>

        <div class="form-group">
            <label for="no_hp">No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $sewa->customer->no_hp }}" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $sewa->customer->alamat }}" required>
        </div>

        <div class="form-group">
            <label for="id_fasilitas">Fasilitas</label>
            <select name="id_fasilitas" class="form-control" required>
                @foreach ($fasilitas as $item)
                    <option value="{{ $item->id_fasilitas }}"
                        {{ $item->id_fasilitas == $sewa->id_fasilitas ? 'selected' : '' }}>
                        {{ $item->nama_paket }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tanggal_acara">Tanggal Acara</label>
            <input type="date" name="tanggal_acara" class="form-control" value="{{ $sewa->tanggal_acara }}" required>
        </div>

        <div class="form-group">
            <label for="nama_acara">Nama Acara</label>
            <input type="text" name="nama_acara" class="form-control" value="{{ $sewa->nama_acara }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('sewa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
