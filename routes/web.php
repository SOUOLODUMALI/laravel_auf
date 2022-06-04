<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Postcontroller;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/accueil',[App\Http\Controllers\Postcontroller::class, 'acueil'])->name('accueil');
Route::get('/admins',[App\Http\Controllers\Postcontroller::class, 'admins'])->name('admins');
Route::get('/authentif',[App\Http\Controllers\Postcontroller::class, 'authentif'])->name('authentif');
Route::post('/etudiant', 'Postcontroller@etudiant')->name('etudiant');
Route::get('/liste',[App\Http\Controllers\Postcontroller::class, 'liste'])->name('liste');


Route::get('/etudiant', [App\Http\Controllers\Postcontroller::class, 'etudiant'])->name('etudiant')->middleware('auth');