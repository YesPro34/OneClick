<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;
use App\Exports\ContactExport;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\UpdateContactRequest;
use PDF;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('admin.contact.index', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->status = 'contact reçu'; 
        $contact->message = $request->message; 
        $contact->save();
        if (Auth::check()) {
              return redirect()->route('admin/contact')->with([
                'succes' => 'les données ajoutée avec succès',
            ]);
        } else {
            return redirect()->route('contact')->with([
                'succes' => 'les données envoyées avec succès',
            ]);   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('admin.contact.edit')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContactRequest $request,$id)
    {
        $contact = Contact::where('id' , $id)
        ->update([
            'name'   => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'status' => $request->input('status'),
            'message'  => $request->input('message')
            
        ]);
       
        return redirect('admin/contact');
     
          
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact=Contact::where('id',$id)
        ->delete();
      
        return redirect('admin/contact');
    }
    public function export(){
        return Excel::download(new ContactExport, 'contacts.xlsx'); 
    }
    public function pdf()
    {
        $data=Contact::all();
           
        $pdf = PDF::loadView('admin.contact.create_pdf', ['data'=>$data],
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
     
        return $pdf->download('contacts.pdf');
    }
}