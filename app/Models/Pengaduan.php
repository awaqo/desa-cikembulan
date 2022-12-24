<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $fillable = [
        // data diri
        'nama',
        'nik',
        'no_hp',
        'email',
        'jenis_kelamin',
        // alamat
        'prov',
        'kab_kota',
        'kec',
        'desa_kelurahan',
        'alamat_ktp',
        // aduan
        'judul',
        'deskripsi',
        'file_pendukung',
    ];
    protected $table = 'pengaduan';
}
