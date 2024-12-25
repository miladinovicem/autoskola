<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CasVoznje extends Model
{
    protected $fillable = ['datum', 'vreme', 'kandidat_id', 'instruktor_id'];

    // Relacija: Čas pripada jednom kandidatu
    public function kandidat(): BelongsTo
    {
        return $this->belongsTo(Kandidat::class);
    }

    // Relacija: Čas pripada jednom instruktoru
    public function instruktor(): BelongsTo
    {
        return $this->belongsTo(Instruktor::class);
    }
}
