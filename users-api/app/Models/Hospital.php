<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospitals';
    protected $fillable = [

        'nama_rumah_sakit',
        'alamat_lengkap',
        'no_telpon',
        'type_rumah_sakit',
        'latitude',
        'longitude',
    ];
}
