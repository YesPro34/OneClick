<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Devis;


class StatistiqueController extends Controller
{
    public function index(){
        $users = Utilisateur::count();
        $devis = Devis::count();

        return view('admin.main_page.index',compact('users','devis'));
    }
}
