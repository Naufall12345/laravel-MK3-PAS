<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'name',
        'spesialis_id'
    ];

    public function spesialis(): BelongsTo
    {
        return $this->belongsTo(Spesialis::class);
    }
}
