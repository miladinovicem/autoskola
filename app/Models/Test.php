<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Test extends Model
{
    protected $fillable = ['naziv', 'datum', 'kandidat_id'];

    // Relacija: Test pripada jednom kandidatu
    public function kandidat(): BelongsTo
    {
        return $this->belongsTo(Kandidat::class);
    }

    // Relacija: Test ima jedan rezultat
    public function rezultat(): HasOne
    {
        return $this->hasOne(RezultatTesta::class);
    }
}
