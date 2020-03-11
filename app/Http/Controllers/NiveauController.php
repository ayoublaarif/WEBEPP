<?php

namespace App\Http\Controllers;
use App\Models\niveaux;
use App\Models\matiers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class NiveauController extends Controller
{

    public function getNiveauDetails(Request $request){

        $matiers = matiers::where('niveaux_fk',$request->nivID)->with('enseignants')->get();

        return  $matiers;
    }

    
}
