<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;
use App\Http\Requests\createDevisRequest;

class frontDevisController extends Controller
{
    public function store(createDevisRequest $request)
{
      $devis = new Devis();
      $devis->nom = $request->nom;
      $devis->email = $request->email;
      $devis->telephone = $request->telephone;
      $devis->status ='recu'; 
      $devis->message = $request->message; 
      $devis->type_demande = $request->type_demande; 
      $devis->save();
      return redirect()->route('devis')->with([
        'succes' => 'les données envoyées avec succès',
]);   
}

}

