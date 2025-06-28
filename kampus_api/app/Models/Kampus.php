<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kampus extends Model
{
    use HasFactory;

    protected $table = 'kampus';

    protected $fillable = [
        'nama_kampus',
        'alamat_lengkap',
        'no_telpon',
        'kategori',
        'latitude',
        'longitude',
        'jurusan',
    ];
}
