<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanans = Pemesanan::all();
        return response()->json($pemesanans);
    }

    public function show($id)
    {
        $pemesanan = Pemesanan::find($id);

        if (!$pemesanan) {
            return response()->json(['message' => 'Pemesanan not found'], 404);
        }

        return response()->json($pemesanan);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pelanggan' => 'required|integer|exists:pelanggans,id',
            'id_paket' => 'required|integer|exists:pakets,id',
            'tanggal_pemesanan' => 'required|date',
            'status_pemesanan' => 'required|string',
        ]);

        $pemesanan = Pemesanan::create($validatedData);

        return response()->json(['message' => 'Pemesanan created', 'data' => $pemesanan], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_pelanggan' => 'required|integer|exists:pelanggans,id',
            'id_paket' => 'required|integer|exists:pakets,id',
            'tanggal_pemesanan' => 'required|date',
            'status_pemesanan' => 'required|string',
        ]);

        $pemesanan = Pemesanan::find($id);

        if (!$pemesanan) {
            return response()->json(['message' => 'Pemesanan not found'], 404);
        }

        $pemesanan->update($validatedData);

        return response()->json(['message' => 'Pemesanan updated', 'data' => $pemesanan], 200);
    }

    public function destroy($id)
    {
        $pemesanan = Pemesanan::find($id);

        if (!$pemesanan) {
            return response()->json(['message' => 'Pemesanan not found'], 404);
        }

        $pemesanan->delete();

        return response()->json(['message' => 'Pemesanan deleted'], 204);
    }
}
