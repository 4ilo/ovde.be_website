<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    protected $fillable = ["naam", "adres"];
    protected $table = "klanten";
    
    
    public function afspraken()
    {
        return $this->hasMany('App\Afspraak');
    }
    
}
