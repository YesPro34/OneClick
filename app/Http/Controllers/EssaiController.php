<?php

namespace App\Http\Controllers;

use App\Models\Essai;
use PDF;
use App\Exports\EssaiExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
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
    public function export(){
        return Excel::download(new EssaiExport, 'Essai_gratuit.xlsx'); 
    }
    public function pdf()
    {
        $data=Essai::all();
           
        $pdf = PDF::loadView('admin.essai_gratuit.create_pdf', ['data'=>$data],
        [ 
           'mode'     => '',
        'format'                     => 'A4',
        'default_font_size'          => '12',
        'default_font'               => 'sans-serif',
        'margin_left'                => 10,
        'margin_right'               => 10,
        'margin_top'                 => 10,
        'margin_bottom'              => 10,
        'margin_header'              => 0,
        'margin_footer'              => 0,
        'orientation'                => 'P',
        'title'                      => 'Laravel mPDF',
        'author'                     => '',
        'watermark'                  => '',
        'show_watermark'             => false,
        'show_watermark_image'       => false,
        'watermark_font'             => 'sans-serif',
        'display_mode'               => 'fullpage',
        'watermark_text_alpha'       => 0.1,
        'watermark_image_path'       => '',
        'watermark_image_alpha'      => 0.2,
        'watermark_image_size'       => 'D',
        'watermark_image_position'   => 'P',
        'custom_font_dir'            => '',
        'custom_font_data'           => [],
        'auto_language_detection'    => false,
        'temp_dir'                   => rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR),
        'pdfa'                       => false,
        'pdfaauto'                   => false,
        'use_active_forms'           => false,
      ]);
     
        return $pdf->download('Essai_gratuit.pdf');
    }
}