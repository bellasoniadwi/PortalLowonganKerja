<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetaController;
use App\Http\Controllers\TransaksiHomeController;
use App\Http\Controllers\Dashboard\TokoController;
use App\Http\Controllers\Dashboard\TitikController;
use App\Http\Controllers\Dashboard\StatusController;
use App\Http\Controllers\Dashboard\LayananController;
use App\Http\Controllers\Dashboard\TransaksiController;
use App\Models\Titik;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// belum login
Route::get('/about', function () {
    return view('home.about', [
        "nama" => "Deuwi Satria Irawan",
        "email" => "satriai418@gmail.com",
        "nomor" => "082253332802",
        "nim" => "H181600607",
        "image" => "satria.jpg"
    ]);
})->name('about');

// seluruh titik laundry
Route::get('/', [PetaController::class, 'index'])->name('peta.index');
Route::get('/peta/{peta}', [PetaController::class, 'show'])->name('peta.show');

// tracking transaksi berdasarkan token
Route::get('/transaksi', [TransaksiHomeController::class, 'index'])->name('track.index');
Route::get('/transaksi/{transaksi:token}', [TransaksiHomeController::class, 'show'])->name('track.show');

//authenticate & authorization
Auth::routes();

// udah login
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('/dashboard/titik', TitikController::class)->only(['index','show']);
    Route::resource('/dashboard/status', StatusController::class)->middleware('admin');
    Route::resource('/dashboard/transaksi', TransaksiController::class)->except(['show']);
    Route::resource('/dashboard/toko', TokoController::class)->except(['show']);
    Route::resource('/dashboard/layanan', LayananController::class)->except(['show']);
});
