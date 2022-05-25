<?php

use Illuminate\Support\Facades\Route;

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
/* route essai gratuit start*/
Route::resource('admin/essai_gratuit', 'EssaiController');
Route::post('/add/essai','EssaiController@store')->name('essai.store');
Route::get('/essai-gratuit-agence-web-marrakech-maroc', function () {
    return view('front.essai-gratuit-agence-web-marrakech-maroc');
})->name('essai');
Route::get('/exportExcelEssai','EssaiController@export')->name('exportExcelEssai');
Route::get('/exportPdfEssai','EssaiController@pdf')->name('exportPdfEssai');
/* route essai gratuit end*/
/* route contact start*/
Route::post('/add/contact','ContactController@store')->name('contact.store');
Route::resource('admin/contact', 'ContactController');
Route::get('/exportPdf','ContactController@pdf')->name('exportPdf');
Route::get('/exportExcel','ContactController@export')->name('exportExcel');
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
});
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
/*back end*/



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('admin/users', 'UtilisateurController');

Route::get('/admin/', function () {
    return view('admin.main_page.index');
});