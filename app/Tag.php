<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ["name", "color"];
    
    public function getLabel()
    {
        return "<span class=\"label label-default\" style=\"background-color:" . $this->color . "\">" . $this->name . "</span>";
    }
}
