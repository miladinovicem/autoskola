<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//kandidat moze imati vise casova voznje i vise rezultata testova
class Kandidat extends Model
{
    public function casoviVoznje()
{
    return $this->hasMany(CasVoznje::class);
}

public function rezultatiTestova()
{
    return $this->hasMany(RezultatTesta::class);
}

}
