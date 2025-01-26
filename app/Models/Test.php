<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//test moze imati Više rezultata testova (jer ga polažu različiti kandidati).
class Test extends Model
{

    protected $fillable = [
        'naziv', 'maksimalan_broj_bodova'
    ];
    
    public function rezultatiTestova()
{
    return $this->hasMany(RezultatTesta::class);
}

}
