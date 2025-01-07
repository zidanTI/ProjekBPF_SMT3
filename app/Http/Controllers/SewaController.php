<?php

namespace App\Http\Controllers;

use App\Mail\kirimEmail;
use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\Customer;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;


class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $sewas = Sewa::when($search, function ($query, $search) {
            return $query->whereHas('customer', function ($q) use ($search) {
                $q->where('nama', 'LIKE', "%{$search}%");
            });
        })->with(['customer', 'fasilitas'])->paginate(10);

        return view('sewa.index', compact('sewas'));

        // $sewas = Sewa::with('customer', 'fasilitas')->get();
        // return view('sewa.index', compact('sewas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fasilitas = Fasilitas::all();
        return view('sewa.create', compact('fasilitas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
            'id_fasilitas' => 'required|exists:fasilitas,id_fasilitas',
            'tanggal_acara' => 'required|date',
            'nama_acara' => 'required|string',
        ]);

        // Menyimpan data pelanggan
        $customer = Customer::create([
            'nama' => $validated['nama'],
            'no_hp' => $validated['no_hp'],
            'alamat' => $validated['alamat'],
        ]);

        // Menyimpan data sewa
        $sewa = Sewa::create([
            'id_customer' => $customer->id_customer,
            'id_fasilitas' => $validated['id_fasilitas'],
            'tanggal_acara' => $validated['tanggal_acara'],
            'nama_acara' => $validated['nama_acara'],
            'status_pembayaran' => 'Belum Dibayar',
        ]);

        // Kirim email notifikasi ke admin
        $adminEmail = "zidan23ti@mahasiswa.pcr.ac.id"; // Ganti dengan email admin
        $details = [
            'title' => 'Notifikasi Booking Baru',
            'body' => "Halo Admin,\n\nTerdapat booking baru dengan detail sebagai berikut:\n" .
                "Nama: {$customer->nama}\n" .
                "No HP: {$customer->no_hp}\n" .
                "Alamat: {$customer->alamat}\n" .
                "Nama Acara: {$sewa->nama_acara}\n" .
                "Tanggal Acara: {$sewa->tanggal_acara}\n" .
                "Status Pembayaran: {$sewa->status_pembayaran}\n",
        ];

        Mail::raw($details['body'], function ($message) use ($adminEmail, $details) {
            $message->to($adminEmail)
                ->subject($details['title']);
        });

        return back()->with('success', 'Booking berhasil dibuat dan notifikasi email telah dikirim!');
    }

    public function confirmPayment(Request $request, $id)
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->status_pembayaran = 'Sudah Dibayar';
        $sewa->save();

        return redirect()->route('sewa.index')->with('success', 'Pembayaran berhasil dikonfirmasi!');
    }

    public function sendWhatsAppNotification($id)
    {
        $sewa = Sewa::findOrFail($id);

        // Nomor WhatsApp Admin
        $customerNumber = $sewa->customer->no_hp;  // Ganti dengan nomor admin

        // Menyusun pesan untuk WhatsApp
        $message = urlencode("Halo Admin, terdapat pembayaran baru dari Customer.\n\n" .
            "Nama: {$sewa->customer->nama}\n" .
            "No HP: {$sewa->customer->no_hp}\n" .
            "Alamat: {$sewa->customer->alamat}\n" .
            "Nama Acara: {$sewa->nama_acara}\n" .
            "Tanggal Acara: {$sewa->tanggal_acara}\n" .
            "Fasilitas: {$sewa->fasilitas->nama_paket}\n" .
            "Status Pembayaran: {$sewa->status_pembayaran}");

        // URL WhatsApp Web untuk mengirim pesan otomatis
        $url = "https://api.whatsapp.com/send?phone={$customerNumber}&text={$message}";

        // Redirect ke URL WhatsApp untuk kirim pesan
        return redirect($url);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sewa = Sewa::with('customer', 'fasilitas')->findOrFail($id);
        $fasilitas = Fasilitas::all();
        return view('sewa.edit', compact('sewa', 'fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
            'id_fasilitas' => 'required|exists:fasilitas,id_fasilitas',
            'tanggal_acara' => 'required|date',
            'nama_acara' => 'required|string',
        ]);

        $sewa = Sewa::findOrFail($id);
        $customer = $sewa->customer;

        // Update Customer
        $customer->update([
            'nama' => $validated['nama'],
            'no_hp' => $validated['no_hp'],
            'alamat' => $validated['alamat'],
        ]);

        // Update Sewa
        $sewa->update([
            'id_fasilitas' => $validated['id_fasilitas'],
            'tanggal_acara' => $validated['tanggal_acara'],
            'nama_acara' => $validated['nama_acara'],
        ]);

        return redirect()->route('sewa.index')->with('success', 'Booking berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->delete();

        return redirect()->route('sewa.index')->with('success', 'Booking berhasil dihapus!');
    }
}
