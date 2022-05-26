<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Exports\UtilisateurExport;
use App\Http\Requests\UtilisateurRequest;
use App\Http\Requests\updateUtilisateurRequest;
use Excel;
use PDF;


class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



  
    public function index()
    {
        $users = Utilisateur::all();
        return view('admin.users.index',[
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Utilisateur::all();
        return view('admin.users.create')->with('user' , $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UtilisateurRequest $request)
    {
        $user = new Utilisateur ;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->role = $request->input('role');
        $user->password = $request->input('password');
        $user->status = $request->input('status');
        $user->save();
        
        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Utilisateur::find($id);
        return view('admin.users.show')->with('user' , $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Utilisateur::find($id);
        return view('admin.users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateUtilisateurRequest $request, $id)
    {
        
        $user = Utilisateur::where('id' , $id)
        ->update([
             'name'      => $request->input('name'),
             'email'     => $request->input('email'),
             'telephone' => $request->input('telephone'),
             'role'      => $request->input('role'),
             'password'  => $request->input('password'),
             'status'    => $request->input('status')
        ]);
        return redirect('admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Utilisateur::find($id);

        $user->delete();

        return redirect('admin/users');

    }
    
    public function exportExcel(){
        
        return Excel::download(new UtilisateurExport, 'Utilisateurs.xlsx');
    }

    public function exportPdf(){

        $data = Utilisateur::all();
          
        $pdf = PDF::loadView('admin.users.pdf', ['data' => $data]);

        return $pdf->download('utilisateur.pdf');
        
    }

}
