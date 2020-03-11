<?php

namespace App\Models;
use transports;

use Illuminate\Database\Eloquent\Model;

class etudiants extends Model
{
    public function transport(){
        
        return $this->belongsToMany('transports', 'etud_transports', 'etudiants_fk', 'transports_fk');
    }
}
