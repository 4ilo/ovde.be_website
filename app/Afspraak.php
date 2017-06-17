<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Afspraak extends Model
{
    protected $table = "afspraken";
    protected $fillable = ["datum", "opmerkingen"];
    
    protected $dates = ["datum"];
    
}
