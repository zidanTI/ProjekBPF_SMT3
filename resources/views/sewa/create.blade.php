@extends('dashboard')

@section('content')
    <form action="{{ route('sewa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Input Customer -->
        <h3>Input Customer</h3>
        <div class="form-group">
            <label for="nama">Nama Customer:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat Customer:</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="no_hp">Nomor HP:</label>
            <input type="text" name="no_hp" class="form-control" required>
        </div>

        <!-- Input Sewa -->
        <h3>Input Sewa</h3>
        <div class="form-group">
            <label for="id_fasilitas">Nama Fasilitas:</label>
            <select name="id_fasilitas" class="form-control" required>
                @foreach ($fasilitas as $f)
                    <option value="{{ $f->id_fasilitas }}">{{ $f->nama_paket }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama_acara">Nama Acara:</label>
            <input type="text" name="nama_acara" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_acara">Tanggal Acara:</label>
            <input type="date" name="tanggal_acara" class="form-control" required>
        </div>

        <!-- Status DP -->
        <div class="form-group">
            <label for="dp">Status DP:</label>
            <select name="dp" class="form-control" required>
                <option value="0">Belum DP</option>
                <option value="1">Sudah DP</option>
            </select>
        </div>

        <div class="form-group">
            <label for="bukti_pembayaran">Bukti Pembayaran</label>
            <input type="file" name="bukti_pembayaran" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
@endsection
