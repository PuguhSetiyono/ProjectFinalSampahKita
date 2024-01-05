<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $pakets = Paket::all();
        return response()->json($pakets);
    }

    public function show($id)
    {
        $paket = Paket::find($id);

        if (!$paket) {
            return response()->json(['message' => 'Paket not found'], 404);
        }

        return response()->json($paket);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_armada' => 'required|integer|exists:armadas,id',
            'id_jadwal' => 'required|integer|exists:jadwals,id',
            'nama_paket' => 'required|string',
            'harga_paket' => 'required|numeric',
            'kadaluarsa_paket' => 'required|date',
        ]);

        $paket = Paket::create($validatedData);

        return response()->json(['message' => 'Paket created', 'data' => $paket], 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_armada' => 'required|integer|exists:armadas,id',
            'id_jadwal' => 'required|integer|exists:jadwals,id',
            'nama_paket' => 'required|string',
            'harga_paket' => 'required|numeric',
            'kadaluarsa_paket' => 'required|date',
        ]);

        $paket = Paket::find($id);

        if (!$paket) {
            return response()->json(['message' => 'Paket not found'], 404);
        }

        $paket->update($validatedData);

        return response()->json(['message' => 'Paket updated', 'data' => $paket], 200);
    }

    public function destroy($id)
    {
        $paket = Paket::find($id);

        if (!$paket) {
            return response()->json(['message' => 'Paket not found'], 404);
        }

        $paket->delete();

        return response()->json(['message' => 'Paket deleted'], 204);
    }
}
