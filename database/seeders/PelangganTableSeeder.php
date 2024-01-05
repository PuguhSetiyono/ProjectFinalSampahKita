<?php


namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PelangganTableSeeder extends Seeder
{
    public function run()
    {
        Pelanggan::create([
            'nama' => 'Nama Pelanggan',
            'alamat_pl' => 'Alamat Pelanggan',
            'tlp_pl' => '081234567890',
            'email_pl' => 'pelanggan@example.com',
            'password_pl' => Hash::make('password'),
            'latitude' => '-7.12345',
            'longitude' => '110.98765',
        ]);

        // Add more seed data as needed
    }
}

