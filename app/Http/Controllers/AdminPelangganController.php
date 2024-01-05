<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class AdminPelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('backend.pelanggan', compact('pelanggans'));
    }

    public function create()
    {
        return view('backend.pelanggan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'alamat_pl' => 'required|string',
            'tlp_pl' => 'required|string',
            'password_pl' => 'required|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        Pelanggan::create($validatedData);
        return redirect()->route('admin.pelanggan.index');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('backend.editpelanggan', compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'alamat_pl' => 'required|string',
            'tlp_pl' => 'required|string',
            'password_pl' => 'required|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($validatedData);
        return redirect()->route('admin.pelanggan');
    }

    public function destroy($id)
{
    $pelanggan = Pelanggan::find($id);

    if (!$pelanggan) {
        abort(404, 'Pelanggan not found');
    }

    $pelanggan->pemesanans()->delete();

    $pelanggan->delete();

    return redirect()->route('admin.pelanggan')->with('success', 'Pelanggan and associated Pemesanans deleted successfully');
}

}
