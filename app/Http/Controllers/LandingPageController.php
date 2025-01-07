<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;

class LandingPageController extends Controller
{
    public function landingFasilitas()
    {
        $fasilitas = Fasilitas::all(); // Mengambil semua data fasilitas
        return view('landingFasilitas', compact('fasilitas'));
    }
}
