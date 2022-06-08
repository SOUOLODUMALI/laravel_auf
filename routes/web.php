<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbonneController;


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
    return view('accueil');
});

Auth::routes();

Route::resource('abonne', AbonneController::class);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/accueil',[AufController::class,'accueil'])->name('abonne.accueil');
//  Route::get('/etudiant',[AufController::class,'etudiant'])->name('etudiant');
// Route::post('/etudiant/store',[AufController::class, 'store'])->name("abonne.store");
// Route::get('/liste',[AufController::class,'liste']);