<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class AdminJadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('backend.jadwal.index', compact('jadwals'));
        
    }

    public function create()
    {
        // Jika diperlukan, tampilkan halaman untuk membuat jadwal baru
        return view('backend.jadwal.create');
    }

    public function store(Request $request)
    {
        // Validasi data input dari request
        $request->validate([
            'hari' => 'required|string',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i',
        ]);

        // Simpan data ke dalam database
        $jadwals = Jadwal::create($request->all());

        // Berikan respons sukses
        return redirect()->route('admin.jadwal.index')
            ->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jadwals = Jadwal::find($id);

        if (!$jadwal) {
            return redirect()->route('admin.jadwal.index')->with('error', 'Jadwal tidak ditemukan');
        }

        return view('backend.jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'hari' => 'required|string',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i',
        ]);

        $jadwals = Jadwal::find($id);

        if (!$jadwal) {
            return redirect()->route('admin.jadwal.index')->with('error', 'Jadwal tidak ditemukan');
        }

        $jadwals->update($request->all());

        return redirect()->route('admin.jadwal.index')
            ->with('success', 'Jadwal berhasil diperbarui');
    }

    public function destroy($id)
    {
        $jadwals= Jadwal::findOrFail($id);
        $jadwals->delete();

        return redirect()->route('admin.jadwal.index')
            ->with('success', 'Jadwal berhasil dihapus');
    }
}
