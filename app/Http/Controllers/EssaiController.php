<?php

namespace App\Http\Controllers;

use App\Models\Essai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEssaiRequest;
use App\Http\Requests\UpdateEssaiRequest;

class EssaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $essais = Essai::all();
        return view('admin.Essai_gratuit.index', [
            'essais' => $essais,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.essai_gratuit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEssaiRequest $request)
    {
        $essai = new Essai();
        $essai->name = $request->name;
        $essai->phone = $request->phone;
        $essai->entreprise = $request->entreprise; 
        $essai->tel_entreprise = $request->tel_entreprise;
        $essai->position = $request->position; 
        $essai->adresse = $request->adresse; 
        $essai->save();
        if (Auth::check()) {
            return redirect()->route('admin/essai_gratuit')->with([
              'succes' => 'les données ajoutée avec succès',
          ]);
      } else {
          return redirect()->route('essai')->with([
              'succes' => 'les données envoyées avec succès',
          ]);   
      } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $essai = Essai::find($id);

        return view('admin.essai_gratuit.edit')->with('essai', $essai);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEssaiRequest $request, $id)
    {
        $essai = Essai::where('id' , $id)
        ->update([
            'name'   => $request->input('name'),
            'phone' => $request->input('phone'),
            'entreprise' => $request->input('entreprise'),
            'tel_entreprise' => $request->input('tel_entreprise'),
            'adresse'  => $request->input('adresse'),
            'position'  => $request->input('position')
         
            
        ]);
       
        return redirect('admin/essai_gratuit');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $essai=Essai::where('id',$id)
        ->delete();
      
        return redirect('admin/essai_gratuit');
    }
}