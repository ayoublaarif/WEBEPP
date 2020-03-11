<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transports extends Model
{
    public function etudiants(){
        
        return $this->belongsToMany('etudiants', 'etud_transports', 'etudiants_fk', 'transports_fk');
    }
    public function quartiers()
    {
        return $this->hasMany('App\Models\quartiers','transports_fk');
    }
}
