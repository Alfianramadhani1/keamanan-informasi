<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dosen extends Model
{
    protected $fillable = ['prodi_id', 'nama', 'nip', 'email', 'alamat'];

    public function prodi(): BelongsTo
    {
        return $this->belongsTo(Prodi::class);
    }
}
