<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class enseignants extends Model
{
    public function matiers(){

       return $this->belongsTo('App\Models\matiers','matiers_fk','id');

    }
}
