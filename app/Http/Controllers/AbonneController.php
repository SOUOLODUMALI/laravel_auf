<?php

namespace App\Http\Controllers;

use App\Models\Abonne;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $abonnes = Abonne::all();

        return view('abonne.etudiant');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abonne.index');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nom" => "bail|required|string|max:200",
            "prenom" => "bail|required|string|max:256",
            "naissance" => "bail|required|date",
            "email" => "bail|required|string|unique:abonnes|max:256",
            "telephone" => "bail|required|unique:abonnes|max:26",
            "date_abonnement" => "bail|required|date",
        ]);

        Abonne::create(
            [
                "nom" => $request->nom,
                "prenom" => $request->prenom,
                "naissance" => $request->naissance,
                "email" => $request->email,
                "telephone" => $request->telephone,
                "date_abonnement" => $request->date_abonnement,
               
            ]
        );

        return redirect(route("abonne.store"));
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function show(Abonne $abonne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function edit(Abonne $abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abonne $abonne)
    {
        return view('abonne.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abonne  $abonne
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abonne $abonne)
    {
        return view('abonne.index');
        
    }
}
