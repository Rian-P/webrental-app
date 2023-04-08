<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils';
    use HasFactory;
    protected $primaryKey = 'id_mobil';
    protected $fillable = [
        'nama_kendaraan',
        'type',
        'nopol',
        'tahun',
        'harga_12_jam',
        'harga_24_jam',
        'deskripsi',
        'image',
    ];

    public function getRouteKeyName()
    {
        return 'nama_kendaraan';
    }
}
