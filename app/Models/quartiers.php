<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class quartiers extends Model
{
    public function transports()
    {
        return $this->belongsTo('App\Models\transports','transports_fk','id');
    }
}
