<?php
// routes/web.php

use App\Http\Controllers\AdminPemesananController;
use App\Http\Controllers\PelangganSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserpemesananControll;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AdminPaketController;
use App\Http\Controllers\AdminPembayaranController;
use App\Http\Controllers\AdminPelangganController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/adminpage', function () {
    return view('backend.adminpage');
});


Route::get('/register-pelanggan', [PelangganController::class, 'create'])->name('register-pl');
Route::post('/register-pelanggan', [PelangganController::class, 'store'])->name('register-pl.store');


Route::get('/loginnn', [TemplateController::class, 'login'])->name('loginnn');
Route::get('/registerrr', [TemplateController::class, 'register'])->name('daftar');


Route::post('/pemesanan/store', [UserpemesananControll::class, 'store'])->name('pemesanan.store');
Route::delete('/pemesanan/delete/{id_users}', [UserpemesananControll::class, 'destroy'])->name('pemesanan.destroy');

Route::prefix('admin')->group(function () {

// Untuk navigasi ke halaman Paket
Route::get('/adminpaketkj', function () {
    return view('backend.paket'); 
})->name('admin.paket');
Route::get('/adminpaket', [AdminPaketController::class, 'index'])->name('admin.paket');
Route::post('/admin/pakets', [AdminPaketController::class, 'store']);
Route::get('/adminpaket/{id}/edit', [AdminPaketController::class, 'edit'])->name('admin.paket.edit');
Route::put('/admin/pakets/{id}', [AdminPaketController::class, 'update'])->name('admin.paket.update');
Route::delete('/admin/paket/delete/{id}', [AdminPaketController::class, 'destroy'])->name('admin.paket.delete');

// Untuk navigasi ke halaman Pemesanan
Route::get('/adminpemesanandrh', function () {
    return view('backend.pemesanan'); 
})->name('admin.pemesanan');
Route::get('/adminpemesanan', [AdminPemesananController::class, 'index'])->name('admin.pemesanans');
Route::get('/admin/editpemesanan/{id}', [AdminPemesananController::class, 'edit'])->name('admin.editpemesanan');
Route::put('/admin/pemesanans/{id}', [AdminPemesananController::class, 'update'])->name('admin.pemesanans.update');
Route::delete('/admin/pemesanans/{id}', [AdminPemesananController::class, 'destroy'])->name('admin.pemesanans.destroy');

// Untuk navigasi ke halaman Pembayaran
Route::get('/adminpembayaranf', function () {
    return view('backend.pembayaran');
})->name('admin.pembayaran');
Route::get('/admin/pembayaran', [AdminPembayaranController::class, 'index'])->name('admin.pembayaran');
Route::get('/admin/pembayaran/create', [AdminPembayaranController::class, 'create'])->name('admin.pembayaran.create');
Route::post('/admin/pembayaran', [AdminPembayaranController::class, 'store'])->name('admin.pembayaran.store');
Route::get('/admin/pembayaran/{id}', [AdminPembayaranController::class, 'show'])->name('admin.pembayaran.show');
Route::get('/admin/pembayaran/{id}/edit', [AdminPembayaranController::class, 'edit'])->name('admin.pembayaran.edit');
Route::put('/admin/pembayaran/{id}', [AdminPembayaranController::class, 'update'])->name('admin.pembayaran.update');
Route::delete('/admin/pembayaran/{id}', [AdminPembayaranController::class, 'destroy'])->name('admin.pembayaran.destroy');


// Untuk navigasi ke halaman Pelanggan
Route::get('/adminpelanggankj', function () {
    return view('backend.pelanggan');
})->name('admin.pelanggan');

Route::get('/adminpelanggan', [AdminPelangganController::class, 'index'])->name('admin.pelanggan');
Route::get('/admin/pelanggan/create', [AdminPelangganController::class, 'create'])->name('admin.pelanggan.create');
Route::post('/admin/pelanggan', [AdminPelangganController::class, 'store'])->name('admin.pelanggan.store');
Route::get('/admin/pelanggan/{id}/edit', [AdminPelangganController::class, 'edit'])->name('admin.pelanggan.edit');
Route::put('/admin/pelanggan/{id}', [AdminPelangganController::class, 'update'])->name('admin.pelanggan.update');
Route::delete('/admin/pelanggan/{id}', [AdminPelangganController::class, 'destroy'])->name('admin.pelanggan.destroy');

Route::get('/adminhome', function () {
    return view('backend.adminpage');
})->name('admin.home');
});

Route::get('/profil-diri', [TemplateController::class, 'datadiri'])->name('registerpage');

Route::get('/home', [HomeController::class, 'index'])->name('landingpage'); 
Route::get('/pemesanan', [UserpemesananControll::class, 'index'])->name('pemesanan')->middleware('auth.user');
Route::get('/jadwal', [TemplateController::class, 'jadwal'])->name('jadwal')->middleware('auth.user');
Route::get('/layanan', [TemplateController::class, 'layanan'])->name('layanan');
Route::get('/contact', [TemplateController::class, 'contact'])->name('contact');
Route::get('/profil', [TemplateController::class, 'profil'])->name('profil');

// Login page
/*Route::get('/sesi', [PelangganSessionController::class, 'index'])->name('loginaja'); // Using GET method
Route::post('/sesi/login', [PelangganSessionController::class, 'login'])->name('postLogin'); // Using POST method
Route::get('/sesi/logout', [PelangganSessionController::class, 'logout'])->name('logout');
Route::get('/sesi/register', [PelangganSessionController::class, 'showRegisterForm'])->name('register');
Route::post('/sesi/register', [PelangganSessionController::class, 'register']);*/

Route::get('/', function () {
    return view('frontend.home'); 
});

Route::get('/adminpage', function () {
    return view('backend.adminpage'); 
})->middleware(['auth','verified'])->name('adminpage');

//Multi Function Autentikasi
Route::get('/home',[HomeController::class,'index'])->name ('landingpage');
//

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//ganti password 

Route::get('/change-password', [PasswordController::class, 'edit'])->name('password.edit');
Route::post('/change-password', [PasswordController::class, 'update'])->name('password.update');

// Route::middleware(['plLogin'])->group(function () {
//     // Rute-rute untuk halaman pemesanan di sini
//     Route::get('/frontend/pemesanan', 'PemesananController@index')->name('pemesanan.index');
// });


require __DIR__.'/auth.php';
