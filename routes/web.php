<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\DevisController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Excel routes
Route::get('/utilisateur-excel', [UtilisateurController::class, 'exportExcel'])->name('utilisateur-excel');
Route::get('/devis-excel', [DevisController::class, 'exportExcel'])->name('devis-excel');


//PDF routes
Route::get('/utilisateur-pdf', [UtilisateurController::class, 'exportPdf'])->name('utilisateur-pdf');
Route::get('/devis-pdf', [DevisController::class, 'exportPdf'])->name('devis-pdf');

//resource routes
Route::resource('admin/users', 'UtilisateurController');
Route::resource('admin/devis', 'DevisController');

Route::get('/admin/index', function(){
    return view('admin.main_page.index');
});

// Route::get('/export', 'UtilisateurController');

// Route::get('/admin/ajouter-utilisateur', function(){
//     return view('admin.main_page.users.create');
// });




