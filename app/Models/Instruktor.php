<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//instruktor moze imati vise casova voznje
class Instruktor extends Model
{
    protected $fillable = [
   'ime', 'prezime', 'email', 'brojTelefona'
    ];
    
    public function casoviVoznje()
    {
        return $this->hasMany(CasVoznje::class);
    }
    
}
