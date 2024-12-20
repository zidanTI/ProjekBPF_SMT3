<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Customer;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data sewa
        $sewas = Sewa::with(['customer', 'fasilitas'])->get();

        // Kirim data ke view
        return view('sewa.index', compact('sewas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua customer dan fasilitas untuk dropdown di form
        $customers = Customer::all();
        $fasilitas = Fasilitas::all();

        return view('sewa.create', compact('customers', 'fasilitas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'id_fasilitas' => 'required|exists:fasilitas,id_fasilitas',
            'nama_acara' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'dp' => 'required|boolean', // 0 = Belum DP, 1 = Sudah DP
            'bukti_pembayaran' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:51200', // Validasi untuk bukti pembayaran
        ]);
        if ($request->hasFile('bukti_pembayaran')) {
            $buktiPembayaranPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
        }
        // 1. Tambahkan customer jika belum ada
        $customer = Customer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        // 2. Tambahkan data sewa
        $sewa = Sewa::create([
            'id_customer' => $customer->id_customer,  // ID Customer yang baru dibuat
            'id_fasilitas' => $request->id_fasilitas,
            'tanggal_acara' => $request->tanggal_acara,
            'bukti_pembayaran' => $buktiPembayaranPath,   // Bisa dikosongkan atau diisi jika sudah ada pembayaran
            'nama_acara' => $request->nama_acara,
            'dp' => $request->dp, // Status DP
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('sewa.index')->with('success', 'Sewa dan Customer berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_booking)
    {
        $sewa = Sewa::findOrFail($id_booking);
        $customers = Customer::all();
        $fasilitas = Fasilitas::all();

        return view('sewa.edit', compact('sewa', 'customers', 'fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id_booking)
    {
        // Validasi inputan
        $request->validate([
            'id_customer' => 'required',
            'id_fasilitas' => 'required',
            'tanggal_acara' => 'required|date',
            'bukti_pembayaran' => 'required',
            'nama_acara' => 'required',
            'dp' => 'required|boolean', // Status DP
        ]);

        // Menghitung total harga berdasarkan fasilitas yang dipilih
        $fasilitas = Fasilitas::find($request->id_fasilitas);
        $total_harga = $fasilitas->harga;

        // Update data sewa
        $sewa = Sewa::findOrFail($id_booking);
        $sewa->update([
            'id_customer' => $request->id_customer,
            'id_fasilitas' => $request->id_fasilitas,
            'tanggal_acara' => $request->tanggal_acara,
            'bukti_pembayaran' => $request->bukti_pembayaran,
            'nama_acara' => $request->nama_acara,
            'total_harga' => $total_harga,
            'dp' => $request->dp, // Menyimpan status DP
        ]);

        return redirect()->route('sewa.index')->with('success', 'Data booking berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_booking)
    {
        $customer = Customer::find($id_booking);

        // Jika customer ditemukan, hapus
        if ($customer) {
            $customer->delete();  // Akan menghapus customer dan data terkait di tabel 'sewa' karena ada cascade delete
        }

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('customers.index')->with('success', 'Customer dan data terkait berhasil dihapus.');
    }
}
