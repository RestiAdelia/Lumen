<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens';
    protected $primaryKey = 'no';
    public $incrementing = true;
    protected $fillable = [
        'nip',
        'nama_lengkap',
        'no_telepon',
        'email',
        'alamat'
    ];
}
