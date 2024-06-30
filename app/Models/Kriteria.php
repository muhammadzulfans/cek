<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_alternatif',
        'ketersediaan_fasilitas',
        'kebutuhan_pelanggan',
        'kualitas_pelayanan',
        'jarak_waktu',
        'biaya'
    ];
}

