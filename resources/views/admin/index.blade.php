@extends('dashboard')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Daftar Booking Sewa</h3>
        <a href="{{ route('sewa.create') }}" class="btn btn-primary">Tambah Sewa</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Nama Fasilitas</th>
                <th>Nama Acara</th>
                <th>Tanggal Acara</th>
                <th>Status DP</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sewas as $sewa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $sewa->customer->nama }}</td>
                    <td>{{ $sewa->fasilitas->nama_paket }}</td>
                    <td>{{ $sewa->nama_acara }}</td>
                    <td>{{ $sewa->tanggal_acara }}</td>
                    <td>{{ $sewa->dp == 0 ? 'Belum DP' : 'Sudah DP' }}</td>
                    <td>
                        <a href="{{ route('sewa.edit', $sewa->id_booking) }}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
