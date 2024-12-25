<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kandidat extends Model
{
    protected $fillable = ['ime', 'prezime', 'email']; 

    // Relacija: Kandidat ima više časova vožnje
    public function casoviVoznje(): HasMany
    {
        return $this->hasMany(CasVoznje::class);
    }

    // Relacija: Kandidat polaže više testova
    public function testovi(): HasMany
    {
        return $this->hasMany(Test::class);
    }
}
