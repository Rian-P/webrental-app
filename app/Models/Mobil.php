<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils';
    use HasFactory;
    protected $fillable = [
        'nama_kendaraan',
        'type',
        'nopol',
        'tahun',
        'harga',
        'deskripsi',
        'image',
    ];
}
