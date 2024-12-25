<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instruktor extends Model
{
    protected $fillable = ['ime', 'prezime', 'email']; 

    // Relacija: Instruktor ima više časova vožnje
    public function casoviVoznje(): HasMany
    {
        return $this->hasMany(CasVoznje::class);
    }
}
