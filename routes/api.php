<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\SampahController;
use App\Http\Controllers\API\PaketController;
use App\Http\Controllers\API\PelangganController;
use App\Http\Controllers\API\PembayaranController;
use App\Http\Controllers\API\PemesananController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', [AuthController::class,'login']);
Route::resource('sampah', SampahController::class);
Route::post('/sampah/{id}',[SampahController::class,'update']);
Route::get('/sampahaja',[SampahController::class,'sampah']);

// PaketController routes
Route::post('/pakets', [PaketController::class, 'store']); // create
Route::get('/pakets', [PaketController::class, 'index']);   // read
Route::post('/pakets/{id}', [PaketController::class, 'update']); // update
Route::delete('/pakets/{id}', [PaketController::class, 'destroy']); // delete

// Pelanggan Routes
Route::post('/pelanggans', [PelangganController::class, 'store']); // create
Route::get('/pelanggans', [PelangganController::class, 'index']);   // read
Route::get('/pelanggans/{id}', [PelangganController::class, 'show']); // read by ID
Route::post('/pelanggans/{id}', [PelangganController::class, 'update']); // update
Route::delete('/pelanggans/{id}', [PelangganController::class, 'destroy']); // delete

// PembayaranController routes
Route::post('/pembayarans', [PembayaranController::class, 'store']); // create
Route::get('/pembayarans', [PembayaranController::class, 'index']);   // read
Route::get('/pembayarans/{id}', [PembayaranController::class, 'show']); // read by ID
Route::post('/pembayarans/{id}', [PembayaranController::class, 'update']); // update
Route::delete('/pembayarans/{id}', [PembayaranController::class, 'destroy']); // delete

// PemesananController routes
Route::post('/pemesanans', [PemesananController::class, 'store']); // create
Route::get('/pemesanans', [PemesananController::class, 'index']);   // read
Route::get('/pemesanans/{id}', [PembayaranController::class, 'show']); // read by ID
Route::post('/pemesanans/{id}', [PemesananController::class, 'update']); // update
Route::delete('/pemesanans/{id}', [PemesananController::class, 'destroy']); // delete