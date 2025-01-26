<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//rezultat testa pripada jednom kandidatu i jednom testu
class RezultatTesta extends Model
{
    protected $fillable = [
        'osvojeni_bodovi', 'datum_polaganja', 'kandidat_id', 'test_id'
    ];
    

    public function kandidat()
{
    return $this->belongsTo(Kandidat::class);
}

public function test()
{
    return $this->belongsTo(Test::class);
}

}
