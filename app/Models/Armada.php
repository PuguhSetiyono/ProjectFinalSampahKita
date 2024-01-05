<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    
    protected $fillable = [
      
        'nama_armada',
        'kapasitas_angkut',
        'created_at',
        'updated_at',
    ];
}
