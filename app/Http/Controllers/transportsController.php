<?php

namespace App\Http\Controllers;

use App\Models\transports;

use Illuminate\Http\Request;

class transportsController extends Controller
{
    public function getTransports(){
        $transports = transports::All();
        return $transports;
    }

    public function addTransport(Request $request){

        $transport = new transports;
        $transport->matricule = $request->matricule;
        $transport->save();

        return $transport;

    }


    public function updateTransport(Request $request){

        $transport = transports::find($request->id);

        return $transport;
    }

    public function deleteTransport(Request $request){

        $transport = transports::find($request->id)->delete();
    }
    
}
