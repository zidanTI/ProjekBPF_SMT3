@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Detail Customer</h1>
        <p><strong>Nama:</strong> {{ $customer->nama }}</p>
        <p><strong>Alamat:</strong> {{ $customer->alamat }}</p>
        <p><strong>No HP:</strong> {{ $customer->no_hp }}</p>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
@endsection
