<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pemesanan;
use App\Models\Pelanggan;
use App\Models\MetodePembayaran;
use App\Models\Paket;

class UserpemesananControll extends Controller
{
    public function index()
    {
        // Cek apakah ada pelanggan dengan id_users yang sesuai dengan user yang sedang login
        $pelanggan = Pelanggan::where('id_users', Auth::user()->id)->first();

        if (!$pelanggan) {

            return redirect()->route('registerpage');
        }

        // Cek apakah ada pemesanan dengan id_pelanggan yang sesuai dengan pelanggan yang ditemukan
        $pemesanan = Pemesanan::where('id_pelanggan', $pelanggan->id)->first();

        if (!$pemesanan) {
            $pembayaranWithType = MetodePembayaran::all();
            $unikTypeId = $pembayaranWithType->pluck('id')->unique();
            $pembayaranTypes = MetodePembayaran::whereIn('id', $unikTypeId)->get();

            $paketWithType = Paket::all();
            $unikTypeId2 = $paketWithType->pluck('id')->unique();
            $paketTypes = Paket::whereIn('id', $unikTypeId2)->get();

            $pelangganInfo = Pelanggan::where('id_users', Auth::user()->id)->first();

            return view('frontend.Pemesanan', compact('pembayaranTypes', 'paketTypes', 'pelangganInfo'));
        }

        return view('frontend.masihSub');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'paket' => 'required|exists:pakets,id',
            'id_pelanggan' => 'required|numeric'
        ]);

        // Create a new Pemesanan instance
        $pemesanan = new Pemesanan();

        $pemesanan->id_pelanggan = $validatedData['id_pelanggan']; 
        $pemesanan->id_paket = $validatedData['paket'];
        $pemesanan->tanggal_pemesanan = now();
        $pemesanan->status_pemesanan = 'Lunas';
        

        $pemesanan->kadaluarsa_paket = now()->addDays(30);

        // Save the Pemesanan
        $pemesanan->save();

        return view('frontend.home')->with('success', 'Pemesanan berhasil disimpan.');
    }

    public function destroy($id_users)
    {
        // Cek apakah ada pelanggan dengan id_users yang sesuai dengan user yang sedang login
        $pelanggan = Pelanggan::where('id_users', $id_users)->first();

        if (!$pelanggan) {
            return redirect()->route('landingpage')->with('error', 'Anda tidak memiliki hak untuk menghapus pemesanan ini.');
        }

        // Cek apakah ada pemesanan dengan id_pelanggan yang sesuai dengan pelanggan yang ditemukan
        $pemesanan = Pemesanan::where('id_pelanggan', $pelanggan->id)->first();

        if (!$pemesanan) {
            return redirect()->route('landingpage')->with('error', 'Pemesanan tidak ditemukan.');
        }

        // Lanjutkan dengan logika destroy sesuai kebutuhan
        $pemesanan->delete();

        return redirect()->route('landingpage')->with('success', 'Pemesanan berhasil dihapus.');
    }
}