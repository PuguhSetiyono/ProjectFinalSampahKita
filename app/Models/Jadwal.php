<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    public $primaryKey = 'id_sampah';
    protected $fillable = [
        'hari',
        'jam_mulai',
        'jam_selesai',
    ];

    // Define relasi atau method lain jika diperlukan
}
