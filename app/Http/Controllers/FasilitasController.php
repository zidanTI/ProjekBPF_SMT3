<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    // Menampilkan daftar fasilitas
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas.index', compact('fasilitas'));
    }

    // Menampilkan form untuk menambah fasilitas
    public function create()
    {
        return view('fasilitas.create');
    }

    // Menyimpan fasilitas baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_paket' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        Fasilitas::create($request->all());
        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit fasilitas
    public function edit(Fasilitas $fasilitas)
    {
        return view('fasilitas.edit', compact('fasilitas'));
    }

    // Mengupdate fasilitas
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'no_pasien' => 'required|unique:pasiens,no_pasien,' . $id, //dari inputan form, unique gak bisa sama
            'nama' => 'required|min:3', //minimal 3 karakter
            'umur' => 'required|numeric', //harus angka
            'jenis_kelamin' => 'required|in:laki-laki,perempuan', //harus antara kedua ini
            'alamat' => 'nullable', //boleh kosong
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:5000'
            //mimes: ekstensi/jenis file //opsional foto di update apa gk
        ]);

        //koding ke database
        $pasien = \App\Models\Fasilitas::findOrFail($id); //membuat objek kosong di variable model
        $pasien->fill($requestData); //mengisi var model dengan data yang sudah ada

        if ($request->hasFile('foto')) {
            Storage::delete($pasien->foto); //menghapus foto lama
            $pasien->foto = $request->file('foto')->store('public'); //menyimpan foto baru
        }

        $pasien->save(); //menyimpan data ke database
        flash('Data sudah diupdate')->success();
        return redirect('/pasien');
        //mengarahkan user ke url sebelumnya yaitu /pasien/create dengan membawa variable
    }


    /**
     * Remove the specified resource from storage.
     */
    // Menghapus fasilitas
    public function destroy(Fasilitas $fasilitas)
    {
        $fasilitas->delete();
        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil dihapus!');
    }
}
