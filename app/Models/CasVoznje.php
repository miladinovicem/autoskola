<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//cas voznje moze da pripada jednom kandidatu i jednom instuktoru
class CasVoznje extends Model
{
    public function kandidat()
{
    return $this->belongsTo(Kandidat::class);
}

public function instruktor()
{
    return $this->belongsTo(Instruktor::class);
}

}
