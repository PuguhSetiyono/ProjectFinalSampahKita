

@extends('layouts.admin')  

@section('content')
    <div class="ml-16 p-4 max-w-7xl px-4 py-5 sm:px-6 lg:px-8 bg-white">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Data Pemesanan</h2>

        <!-- Tabel CRUD -->
        <div class="mt-6">
            <table class="min-w-full bg-white border border-gray-300">
                <!-- ... (header table) -->
                <tbody>
                    @foreach($pemesanans as $pemesanan)
                        <tr>
                            <!-- Tampilkan informasi pemesanan di sini -->
                            <td class="py-2 px-4 border-b">{{ $pemesanan->id_pelanggan }}</td>
                            <td class="py-2 px-4 border-b">{{ $pemesanan->id_paket }}</td>
                            <td class="py-2 px-4 border-b">{{ $pemesanan->tanggal_pemesanan }}</td>
                            <td class="py-2 px-4 border-b">{{ $pemesanan->status_pemesanan }}</td>
                            <!-- ... (tombol lihat, edit, hapus) -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Tombol Tambah Pemesanan -->
        <div class="flex items-center justify-center mt-8">
            <a href="{{ route('admin.pemesanans.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Tambah Pemesanan</a>
        </div>
    </div>
@endsection