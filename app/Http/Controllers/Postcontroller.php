<?php

namespace App\Http\Controllers;
use App\Etudiant;
use Illuminate\Http\Request; 

class Postcontroller extends Controller
{
 public function index()   
 { 
  

 $etudiants = Etudiants::orderBy('nom', 'desc')->first();
 return view('etudiant');

 }

 public function store (Request $request)


 {
    // $validate = $request->validate([
    //     'nom' => 'required|min:3',
    //     'prenom' => 'required|min:3',
    //     'email' => 'required|email',
    //     'telephone' => 'required|numeric',
    //     'date_abonnement' => 'required|date',
    // ]);

    $etudiant = new Etudiant();
    $etudiant->nom = $request->input('nom');
    $etudiant->prenom = $request->input('prenom');
    $etudiant->naissance = $request->input('date_naissance');
    $etudiant->telephone = $request->input('telephone');
    $etudiant->email = $request->input('email');
    $etudiant->date_abonnement = $request->input('date_abonnement');
    $etudiant->save();
    
    $last_id = $etudiant->nom;
    $etudiant = Etudiant::orderBy('nom', 'desc')->first();

    return redirect('etudiant')->with('success', 'Votre inscription a bien été prise en compte');
}
public function list ()
{
    $etudiants = Etudiants::All();
    return view('list');
}
// public function edit ($nom)
// {
//     $etudiant = Etudiant::find($nom);
//     return view('edit', compact('etudiant'));
// }
// public function update (Request $request, $id)
// {
//     $etudiant = Etudiant::find($id);
//     $etudiant->nom = $request->input('nom');
//     $etudiant->prenom = $request->input('prenom');
//     $etudiant->date_naissance = $request->input('date_naissance');
//     $etudiant->date_abonne = $request->input('date_abonne');
//     $etudiant->email = $request->input('email');
//     $etudiant->telephone = $request->input('telephone');
//     $etudiant->save();
//     $etudiants = Etudiant::All();
//     return redirect('list')->with('success', 'Votre inscription a bien été modifiée');
// }
// public function destroy ($id)
// {
//     $etudiant = Etudiant::find($id);
//     $etudiant->delete();
//     return redirect('/list');
// }

}

//  public function etudiant()
//  { return view('etudiant') ;}



// public function liste(){
//     return view('liste');
//     }

   
    
    // public function store(){
    
    //    $submit=request('submit');

    //    $etudiant = new Etudiant();
      
    //    $etudiant->name = $submit();

    //    $etudiant->save();
    //    return back();

    // }


