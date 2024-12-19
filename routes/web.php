<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FasilitasController;

Route::get('/landing', function () {
    return view('landing');
});
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
    return redirect('login');
});
Route::resource('customers', CustomerController::class);
Route::resource('fasilitas', FasilitasController::class);