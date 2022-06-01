<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;
// use App\Http\Requests\createDevisRequest;


class devisRapideController extends Controller
{
    public function store(Request $request)
    {
          $devis = new Devis();
          $devis->nom ='Devis Rapide';
          $devis->email = $request->email;
          $devis->telephone = $request->telephone;
          $devis->status ='Devis Recu'; 
          $devis->message = $request->message; 
          $devis->type_demande = 'Unknown';
          $devis->save();
            return redirect()->route('devis')->with([
                'succes' => 'les données envoyées avec succès',
    ]);   
    }
}
