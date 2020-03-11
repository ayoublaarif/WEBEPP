<?php

namespace App\Http\Controllers;

use App\Models\etudiants;

use Illuminate\Http\Request;

class etudiantsController extends Controller
{
    public function getEtudiants(){
        $etudiants = etudiants::All();
        return $etudiants;
    }

    public function addEtudiant(Request $request){

        $etudiant = new etudiants;
        $etudiant->code = $request->code;
        $etudiant->prenom = $request->prenom;
        $etudiant->nom = $request->nom;
        $etudiant->dateNaissance = $request->dateNaissance;
        $etudiant->adresse_fk = 2;
        $etudiant->save();

        return $etudiant;

    }


    public function updateEtudiant(Request $request){

        // $etudiant = etudiants::find($request->id);
        // $col = key($request->all()[1]);
        // $etudiant->$col = $request->$col;
        // $etudiant->save();

        return $request->val->nom;

    }

    public function deleteEtudiant(Request $request){

        $etudiant = etudiants::find($request->id)->delete();
        // $etudiants = etudiants::All();
        // return $etudiants;
        
    }

    // public function test(Request $request){

    //     return key($request->all());

        
    // }
    
}
