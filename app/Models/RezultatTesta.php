<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//rezultat testa pripada jednom kandidatu i jednom testu
class RezultatTesta extends Model
{
    public function kandidat()
{
    return $this->belongsTo(Kandidat::class);
}

public function test()
{
    return $this->belongsTo(Test::class);
}

}
