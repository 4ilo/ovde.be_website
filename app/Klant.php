<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    protected $fillable = ["naam", "adres", "reputatie"];
    protected $table = "klanten";
    
    
    public function afspraken()
    {
        return $this->hasMany('App\Afspraak');
    }
    
    /**
     * Deze functie geeft het adres van een klant met \n vervangen door <br\>
     * @return string
     */
    public function getHtmlAdres()
    {
        return nl2br($this->adres);
    }
}
