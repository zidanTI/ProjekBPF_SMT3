@extends('dashboard')

@section('content')
    <div class="container">
        <h2>Daftar Sewa</h2>
        
        <!-- Form Search -->
        <form action="{{ route('sewa.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama..." value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>

        <a href="{{ route('sewa.create') }}" class="btn btn-primary mb-3">Tambah sewa</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Fasilitas</th>
                    <th>Tanggal Acara</th>
                    <th>Status Pembayaran</th>
                    <th>Nama Acara</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sewas as $sewa)
                    <tr>
                        <td>{{ $sewa->customer->nama }}</td>
                        <td>{{ $sewa->fasilitas->nama_paket }}</td>
                        <td>{{ $sewa->tanggal_acara }}</td>
                        <td>{{ $sewa->status_pembayaran }}</td>
                        <td>{{ $sewa->nama_acara }}</td>
                        <td>
                            @if ($sewa->status_pembayaran === 'Belum Dibayar')
                                <form action="{{ route('sewa.confirmPayment', $sewa->id_booking) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Konfirmasi</button>
                                </form>
                            @endif
                            @if (!$sewa->notifikasi_wa)
                                <a href="{{ route('sewa.sendWhatsAppNotification', $sewa->id_booking) }}" class="btn btn-primary">Kirim WA</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $sewas->links() }}
    </div>
@endsection
