<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FasilitasController;
use App\Models\Fasilitas;
use App\Models\Sewa;

use App\Http\Controllers\LandingPageController;


Route::get('/landing', function () {
    return view('landing');
});
Route::get('/porto', function () {
    return view('porto');
});


Route::get('/landingBaru', function () {
    $fasilitas = Fasilitas::all(); // Mengambil semua data fasilitas
    return view('landingBaru', compact('fasilitas')); // Mengirim data ke view landingBaru
})->name('landingBaru');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::get('/loginadmin', function () {
//     return view('loginAdmin');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('logout', function () {
    Auth::logout();
    return redirect('landingBaru');
});
Route::resource('customers', CustomerController::class);
Route::resource('fasilitas', FasilitasController::class);
Route::resource('sewa', SewaController::class);

Route::post('/sewa/confirm-payment/{id}', [SewaController::class, 'confirmPayment'])->name('sewa.confirmPayment');
Route::get('/sewa/send-whatsapp/{id}', [SewaController::class, 'sendWhatsAppNotification'])->name('sewa.sendWhatsAppNotification');


Route::get('/landingFasilitas', [LandingPageController::class, 'landingFasilitas'])->name('landingFasilitas');

Route::get('/api/sewa/events', function () {
    $sewa = Sewa::with('customer')->get();

    $events = $sewa->map(function ($item) {
        return [
            'title' => $item->nama_acara,
            'start' => $item->tanggal_acara,
        ];
    });

    return response()->json($events);
});
