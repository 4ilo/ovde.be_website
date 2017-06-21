<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afspraak extends Model
{
    protected $table = "afspraken";
    protected $fillable = ["datum", "opmerkingen", "tijd"];
    
    protected $dates = ["datum"];
    
}
