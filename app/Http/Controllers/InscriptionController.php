<?php

namespace App\Http\Controllers;
use App\Models\etud_transports;
use App\Models\niveaux;
use App\Models\etudiants;
use App\Models\transports;
use App\Models\quartiers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function getTransports(){

        $transports = transports::with('quartiers')->get();
        
        // foreach ($quartiers as $quartiers) {
        //     //
        // }
        // $transports = transports::All();
        return $transports;
    }

    public function addTransportInscription(Request $request){

        $etudiant = etudiants::where('code', $request->codeEtud)->first();
        

        if($etudiant != null){
            $etud_transport = etud_transports::where('etudiants_fk',$etudiant->id)->first();
            if($etud_transport == null)
            {return 'DONE';}
            else
            {return 'DEJA_INSCRIT';}
            // $etud_transport = new etud_transports;
            // $etud_transport->etudiants_fk = $etudiant->id;
            // $etud_transport->transports_fk = 1;
            // $etud_transport->status = "not payed";
            // $etud_transport->save();
            
        }else{
            return 'EXISTE_PAS';
        }
        

        // Schema::create('prog' , function($tb){
        //     $tb->increments('id');
        //     $tb->string('name');
        // });


            
        



    }

    public function addEtud_transports(Request $request){
            $etudiant = etudiants::where('code', $request->codeEtud)->first();
            $etud_transport = new etud_transports;
            $etud_transport->etudiants_fk = $etudiant->id;
            $etud_transport->transports_fk = $request->transID;
            $etud_transport->status = "IMPAYE";
            $etud_transport->save();

            return "DONE";
    }

    
}
