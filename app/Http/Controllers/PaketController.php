<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Paket;

class PaketController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data input dari request
        $request->validate([
            'id_armada' => 'required|exists:armadas,id',
            'id_jadwal' => 'required|exists:jadwals,id',
            'nama_paket' => 'required|string',
            'harga_paket' => 'required|numeric',
        ]);

        // Tambahkan 30 hari ke waktu saat ini untuk mendapatkan tanggal kadaluarsa
        $kadaluarsa_paket = Carbon::now()->addDays(30);

        // Simpan data ke dalam database
        $paket = Paket::create([
            'id_armada' => $request->id_armada,
            'id_jadwal' => $request->id_jadwal,
            'nama_paket' => $request->nama_paket,
            'harga_paket' => $request->harga_paket,
            'kadaluarsa_paket' => $kadaluarsa_paket,
        ]);

        // Berikan respons sukses
        return response()->json(['message' => 'Paket berhasil ditambahkan', 'data' => $paket], 201);
    }
}
