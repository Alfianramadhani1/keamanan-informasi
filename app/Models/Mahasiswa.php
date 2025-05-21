<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    protected $fillable = ['prodi_id', 'nama', 'nim', 'email', 'angkatan'];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }
}
