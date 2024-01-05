<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return response()->json($pelanggans);
    }

    public function show($id)
    {
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan not found'], 404);
        }

        return response()->json($pelanggan);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'alamat_pl' => 'required|string',
            'tlp_pl' => 'required|string',
            'id_users' => 'required|exists:users,id', // Pastikan ID user yang disebutkan ada di tabel 'users'
            'latitude' => 'required|string',
            'longitude' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Simpan data pelanggan
        $pelanggan = Pelanggan::create($validator->validated());

        return response()->json(['message' => 'Pelanggan created', 'data' => $pelanggan], 201);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string',
            'alamat_pl' => 'required|string',
            'tlp_pl' => 'required|string',
            'id_users' => 'required|exists:users,id', // Pastikan ID user yang disebutkan ada di tabel 'users'
            'latitude' => 'required|string',
            'longitude' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Perbarui data pelanggan
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan not found'], 404);
        }

        $pelanggan->update($validator->validated());

        return response()->json(['message' => 'Pelanggan updated', 'data' => $pelanggan], 200);
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);

        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan not found'], 404);
        }

        $pelanggan->delete();

        return response()->json(['message' => 'Pelanggan deleted'], 204);
    }
}