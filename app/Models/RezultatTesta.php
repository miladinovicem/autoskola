<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RezultatTesta extends Model
{
    protected $fillable = ['test_id', 'rezultat'];

    // Relacija: Rezultat pripada jednom testu
    public function test(): BelongsTo
    {
        return $this->belongsTo(Test::class);
    }
}

