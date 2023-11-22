<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'nama_siswa',
        'kelas',
        'foto',
        'deskripsi',
        'tgl_juara',
    ];
}
