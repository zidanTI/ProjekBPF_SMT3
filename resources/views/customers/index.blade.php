@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Daftar Customer</h1>
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Tambah Customer</a>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $customer->nama }}</td>
                        <td>{{ $customer->alamat }}</td>
                        <td>{{ $customer->no_hp }}</td>
                        <td>
                            <a href="{{ route('customers.show', $customer->id_customer) }}"
                                class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('customers.edit', $customer->id_customer) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('customers.destroy', $customer->id_customer) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
