<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Devis;
use Carbon\Carbon;


class StatistiqueController extends Controller
{
    public function index(){
        $users = Utilisateur::count();
        $devis = Devis::count();

        $data=Devis::select('id','created_at')->get()->groupBy(function($data){
            return Carbon::parse($data->created_at)->format('M');
        });
        $months=[];
        $monthCount=[];
        foreach($data as $month => $values){
            $months[]=$month;
            $monthCount[]=count($values);
        }

        return view('admin.main_page.index',compact('users','devis','months','monthCount','data'));
    }


 

}
