<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\devisRapideController;
use App\Http\Controllers\frontDevisController;
use App\Http\Controllers\RdvController;
use App\Http\Controllers\StatistiqueController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/devis', [frontDevisController::class, 'store'])->name('/devis-save');

Route::post('/devis-rapide', [devisRapideController::class, 'store'])->name('/devisRapide-save');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

//Excel routes
Route::get('/utilisateur-excel', [UtilisateurController::class, 'exportExcel'])->name('utilisateur-excel');
Route::get('/devis-excel', [DevisController::class, 'exportExcel'])->name('devis-excel');


//PDF routes
Route::get('/utilisateur-pdf', [UtilisateurController::class, 'exportPdf'])->name('utilisateur-pdf');
Route::get('/devis-pdf', [DevisController::class, 'exportPdf'])->name('devis-pdf');

//resource routes
Route::resource('admin/users', 'UtilisateurController');
Route::resource('admin/devis', 'DevisController');
Route::resource('admin/rdv', 'RdvController');

Route::get('/admin/index', [StatistiqueController::class, 'index']);



// Route::get('/export', 'UtilisateurController');

// Route::get('/admin/ajouter-utilisateur', function(){
//     return view('admin.main_page.users.create');
// });


//---------------routes de front end----------------------------//



/*route devis gratuit */


/* route essai gratuit start*/
// Route::resource('admin/essai_gratuit', 'EssaiController');
// Route::post('/add/essai','EssaiController@store')->name('essai.store');
Route::get('/essai-gratuit-agence-web-marrakech-maroc', function () {
    return view('front.essai-gratuit-agence-web-marrakech-maroc');
})->name('essai');
// Route::get('/exportExcelEssai','EssaiController@export')->name('exportExcelEssai');
// Route::get('/exportPdfEssai','EssaiController@pdf')->name('exportPdfEssai');
/* route essai gratuit end*/
/* route contact start*/
Route::post('/add/contact','ContactController@store')->name('contact.store');
// Route::resource('admin/contact', 'ContactController');
// Route::get('/exportPdf','ContactController@pdf')->name('exportPdf');
// Route::get('/exportExcel','ContactController@export')->name('exportExcel');
/* route contact end*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('/A-propos-agence-web-maroc', function () {
    return view('front.A-propos-agence-web-maroc');
});
Route::get('/blog-agence-web-maroc', function () {
    return view('front.blog-agence-web-maroc');
});
Route::get('/blog-details-1-agence-web-maroc', function () {
    return view('front.blog-details-1-agence-web-maroc');
});
Route::get('/blog-details-2-agence-web-maroc', function () {
    return view('front.blog-details-2-agence-web-maroc');
});
Route::get('/blog-details-3-agence-web-maroc', function () {
    return view('front.blog-details-3-agence-web-maroc');
});
Route::get('/blog-details-4-agence-web-maroc', function () {
    return view('front.blog-details-4-agence-web-maroc');
});
Route::get('/blog-details-5-agence-web-maroc', function () {
    return view('front.blog-details-5-agence-web-maroc');
});
Route::get('/blog-details-6-agence-web-maroc', function () {
    return view('front.blog-details-6-agence-web-maroc');
});
Route::get('/contact-agence-web-marrakech-maroc', function () {
    return view('front.contact-agence-web-marrakech-maroc');
})->name('contact');
Route::get('/creation-app-mobile-maroc', function () {
    return view('front.creation-app-mobile-maroc');
});
Route::get('/creation-app-web-maroc', function () {
    return view('front.creation-app-web-maroc');
});
Route::get('/creation-site-web-maroc', function () {
    return view('front.creation-site-web-maroc');
});
Route::get('/demande-devis', function () {
    return view('front.demande-devis');
})->name('devis');
Route::get('/design-graphic-maroc', function () {
    return view('front.design-graphic-maroc');
});
Route::get('/devis-logiciel-facturation-maroc', function () {
    return view('front.devis-logiciel-facturation-maroc');
});
Route::get('/multi-devis-langue-logiciel-facturation-maroc', function () {
    return view('front.multi-devis-langue-logiciel-facturation-maroc');
});
Route::get('/facture-logiciel-facturation-maroc', function () {
    return view('front.facture-logiciel-facturation-maroc');
});
Route::get('/fonctionnalites-logiciel-facturation-maroc', function () {
    return view('front.fonctionnalites-logiciel-facturation-maroc');
});
Route::get('/formation-conseils-marrakech-maroc', function () {
    return view('front.formation-conseils-marrakech-maroc');
});
Route::get('/gestion-achats-fournisseur-logiciel-facturation-maroc', function () {
    return view('front.gestion-achats-fournisseur-logiciel-facturation-maroc');
});
Route::get('/gestion-commerciale-logiciel-facturation-maroc', function () {
    return view('front.gestion-commerciale-logiciel-facturation-maroc');
});
Route::get('/gestion-stock-logiciel-facturation-maroc', function () {
    return view('front.gestion-stock-logiciel-facturation-maroc');
});
Route::get('/offshore-web-marrakech-maroc', function () {
    return view('front.offshore-web-marrakech-maroc');
});
Route::get('/publicite-sur-internet-marrakech-maroc', function () {
    return view('front.publicite-sur-internet-marrakech-maroc');
});
Route::get('/referencement-web-maroc', function () {
    return view('front.referencement-web-maroc');
});
Route::get('/services-agence-web-marrakech-maroc', function () {
    return view('front.services-agence-web-marrakech-maroc');
});
//back end




// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::resource('admin/users', 'UtilisateurController');

// Route::get('/',function(){
//     return view('welcome');
// });


// Route::get('/admin/index', function(){
//     return view('admin.main_page.index');
// });


// Route::get('/admin/ajouter-utilisateur', function(){
//     return view('admin.main_page.users.create');
// });

