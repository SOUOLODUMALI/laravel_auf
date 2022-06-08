<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\etudiant;


class AufController extends Controller
{
 public function etudiant()    { 
   $etudiants = Etudiant::all();
   return view('etudiant');

  }

 public function store (Request $request)


 {
     $validate = $request->validate([
        'nom' => 'required|min:3',
         'prenom' => 'required|min:3',
         'email' => 'required|email',
         'naissance'=>'required|min:3',
         'telephone' => 'required|numeric',
         'date_abonnement' => 'required|date',
     ]);

    $etudiants = new Etudiant();
    $etudiants->nom = $request('nom');
    $etudiants->prenom = $request('prenom');
    $etudiants->naissance = $request('naissance');
    $etudiants->telephone = $request('telephone');
    $etudiants->email = $request('email');
    $etudiants->date_abonnement = $request('date_abonnement');
    $etudiants->save();
    
    // $last_id = $etudiant->nom;
    // $etudiants = Etudiants::orderBy('nom', 'desc')->first();

    return redirect('/')->with('success', 'Votre inscription a bien été prise en compte');
}
public function liste ()
{
    $etudiants = Etudiants::All();
    return view('liste');
}
}