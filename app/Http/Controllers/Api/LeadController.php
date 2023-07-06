<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Lead;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewContact;
class LeadController extends Controller
{
    //
    public function store(Request $request){
        $data = $request->all();
        // validazione
        // salvataggio dati nel db
        // $newLead =new Lead();
        // $newLead -> fill( $data );
        // $newLead ->save();
        $newLead = Lead::create($data);
        
        // invio email
        Mail::to('oksana@boolpress.it')->send(new NewContact( $newLead ) );
        //ottenere risposta positiva in json
        return response()->json([
            'success' => true
        ]);
        
    }
}