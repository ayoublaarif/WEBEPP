<?php

namespace App\Http\Controllers;

use App\Models\quartiers;
use App\Models\transports;
use Illuminate\Http\Request;

class quartiersController extends Controller
{
    public function getQuartiers(){
        // $quartiers = quartiers::with('transports')->get();

        $quartiers = quartiers::All();
        return $quartiers;
    }

    public function addQuartier(Request $request){

        $quartier = new quartiers;
        $quartier->nom = $request->nom;
        $quartier->transports_fk = $request->transports_fk;
        $quartier->save();

        return $quartier;

    }


    public function updateQuartier(Request $request){

        // $etudiant = etudiants::find($request->id);
        // $col = key($request->all()[1]);
        // $etudiant->$col = $request->$col;
        // $etudiant->save();

        return $request->val->nom;

    }

    public function deleteQuartier(Request $request){

        quartiers::find($request->id)->delete();
    }

    public function getselectItems(){
        // $quartiers = quartiers::with('transports')->get();

        // $transports = transports::get('id')->pluck('id');
        $transports = transports::All();
        return $transports;
    }
    
}
