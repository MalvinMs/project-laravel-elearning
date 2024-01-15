<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'email', 'gender', 'alamat', 'ttl'];

    public function walikelas(): BelongsToMany
    {
        return $this->belongsToMany(WaliKelas::class, 'guru_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
