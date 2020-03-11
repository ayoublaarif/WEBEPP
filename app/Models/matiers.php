<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class matiers extends Model
{
    public function enseignants()
    {
        return $this->hasMany('App\Models\enseignants','matiers_fk');
    }
}
