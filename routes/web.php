<?php

use App\Http\Controllers\Dashboard\KategoriController;
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
use App\Http\Controllers\Dashboard\LowonganPekerjaanController;
use App\Http\Controllers\Dashboard\TransaksiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFaqController;

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

// seluruh titik laundry
Route::get('/', [PetaController::class, 'index'])->name('peta.index');
Route::get('/about', [PetaController::class, 'about'])->name('peta.about');
Route::get('/faqs', [FaqController::class, 'user'])->name('faq.user');
Route::get('/peta/{peta}', [PetaController::class, 'show'])->name('peta.show');
Route::get('/detail/{id}', [LowonganPekerjaanController::class, 'detail'])->name('lowonganpekerjaan.detail');
Route::get('/show/{id}', [LowonganPekerjaanController::class, 'detail_user'])->name('lowonganpekerjaan.detail_user');
Route::resource('/userfaq', UserFaqController::class)->only(['create','store']);
Route::resource('/tracking', TrackingController::class)->only(['index']);


//authenticate & authorization
Auth::routes();

// udah login
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    

    Route::get('/dashboard/perusahaan',[UserController::class, 'index'])->name('perusahaan');
    Route::resource('/dashboard/profile', UserController::class);
    Route::resource('/dashboard/titik', TitikController::class)->only(['index','show']);  
    Route::resource('/dashboard/kategori', KategoriController::class)->middleware('admin')->except(['show']);
    Route::resource('/dashboard/faq', FaqController::class)->middleware('admin')->except(['show']);
    Route::resource('/dashboard/lowonganpekerjaan', LowonganPekerjaanController::class);
    Route::get('/dashboard/arsiplowonganpekerjaan', [LowonganPekerjaanController::class, 'inactive'])->name('lowonganpekerjaan.inactive');

    //ajax
    Route::get('/status/update', [LowonganPekerjaanController::class, 'updateStatus'])->name('update.status');
    Route::get('/allowuser/update', [UserController::class, 'updateStatus'])->name('allowuser');
});
