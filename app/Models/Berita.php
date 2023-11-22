<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi_1', 'deskripsi_2', 'foto', 'tgl_berita'];
}
