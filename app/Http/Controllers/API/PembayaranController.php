<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayarans = Pembayaran::all();
        return response()->json($pembayarans);
    }

    public function show($id)
    {
        $pembayaran = Pembayaran::find($id);

        if (!$pembayaran) {
            return response()->json(['message' => 'Pembayaran not found'], 404);
        }

        return response()->json($pembayaran);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_pemesanan' => 'required|integer|exists:pemesanans,id',
            'id_metode_pembayaran' => 'required|integer|exists:metode_pembayarans,id',
            'status_pembayaran' => 'required|integer',
        ]);

        $pembayaran = Pembayaran::create($validatedData);

        return response()->json(['message' => 'Pembayaran created', 'data' => $pembayaran], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_pemesanan' => 'required|integer|exists:pemesanans,id',
            'id_metode_pembayaran' => 'required|integer|exists:metode_pembayarans,id',
            'status_pembayaran' => 'required|integer',
        ]);

        $pembayaran = Pembayaran::find($id);

        if (!$pembayaran) {
            return response()->json(['message' => 'Pembayaran not found'], 404);
        }

        $pembayaran->update($validatedData);

        return response()->json(['message' => 'Pembayaran updated', 'data' => $pembayaran], 200);
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::find($id);

        if (!$pembayaran) {
            return response()->json(['message' => 'Pembayaran not found'], 404);
        }

        $pembayaran->delete();

        return response()->json(['message' => 'Pembayaran deleted'], 204);
    }
}
