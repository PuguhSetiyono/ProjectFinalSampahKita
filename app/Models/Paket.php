<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_armada',
        'id_jadwal',
        'nama_paket',
        'harga_paket',
        'kadaluarsa_paket',
        'gambar',
        'created_at',
        'updated_at',
    ];
}
