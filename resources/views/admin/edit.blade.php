@extends('dashboard')

@section('content')
    <form action="{{ route('sewa.update', $sewa->id_booking) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_customer">Customer</label>
            <select name="id_customer" id="id_customer" class="form-control">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id_customer }}"
                        {{ $sewa->id_customer == $customer->id_customer ? 'selected' : '' }}>
                        {{ $customer->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="id_fasilitas">Fasilitas</label>
            <select name="id_fasilitas" id="id_fasilitas" class="form-control">
                @foreach ($fasilitas as $fasilitas_item)
                    <option value="{{ $fasilitas_item->id_fasilitas }}"
                        {{ $sewa->id_fasilitas == $fasilitas_item->id_fasilitas ? 'selected' : '' }}>
                        {{ $fasilitas_item->nama_paket }} - Rp {{ number_format($fasilitas_item->harga, 0) }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tanggal_acara">Tanggal Acara</label>
            <input type="date" name="tanggal_acara" class="form-control" value="{{ $sewa->tanggal_acara }}" required>
        </div>

        <div class="form-group">
            <label for="bukti_pembayaran">Bukti Pembayaran</label>
            <input type="text" name="bukti_pembayaran" class="form-control" value="{{ $sewa->bukti_pembayaran }}"
                required>
        </div>

        <div class="form-group">
            <label for="nama_acara">Nama Acara</label>
            <input type="text" name="nama_acara" class="form-control" value="{{ $sewa->nama_acara }}" required>
        </div>

        <div class="form-group">
            <label for="dp">Status DP</label><br>
            <input type="radio" name="dp" value="0" {{ $sewa->dp == 0 ? 'checked' : '' }}> Belum DP
            <input type="radio" name="dp" value="1" {{ $sewa->dp == 1 ? 'checked' : '' }}> Sudah DP
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
