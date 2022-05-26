<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devis;
use App\Exports\DevisExport;
use App\Http\Requests\createDevisRequest;
use App\Http\Requests\updateDevisRequest;
use Excel;
use PDF;

class DevisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devis = Devis::all();
        return view('admin.devis.index',[
            'devis' => $devis
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $devis = Devis::all();
        return view('admin.devis.create')->with('devis' , $devis);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createDevisRequest $request)
    {
        $devis = new Devis ;
        $devis->nom = $request->input('nom');
        $devis->telephone = $request->input('telephone');
        $devis->email = $request->input('email');
        $devis->type_demande = $request->input('type_demande');
        $devis->status = $request->input('status');
        $devis->message = $request->input('message');
        $devis->save();
        return redirect('admin/devis');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $devis = Devis::find($id);
        return view('admin.devis.show')->with('devis',$devis);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $devis = Devis::find($id);
        return view('admin.devis.edit')->with('devis',$devis);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateDevisRequest $request, $id)
    {
        $devis = Devis::where('id' , $id)
        ->update([
             'nom'      => $request->input('nom'),
             'telephone'     => $request->input('telephone'),
             'email' => $request->input('email'),
             'type_demande'      => $request->input('type_demande'),
             'status'  => $request->input('status'),
             'message'    => $request->input('message')
        ]);
        return redirect('admin/devis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $devis = Devis::find($id);

        $devis->delete();

        return redirect('admin/devis');
    }

    public function exportExcel(){
        return Excel::download(new DevisExport, 'devis.xlsx');
    }

    public function exportPdf(){

        $data = Devis::all();
          
        $pdf = PDF::loadView('admin.devis.pdf', ['data' => $data]);

        return $pdf->download('devis.pdf');
        
    }
}
