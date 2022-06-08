<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Etudiant extends Model
{
    use HasFactory;

    // protected $table = 'etudiants';   
    protected $fillable =[
        'nom',
        'prenom',
        'naissance',
        'email',
        'telephone',
        'date_abonnement'
    ];
// function store()
// {
//     Etudiants::Create([  "nom" => "keita",
//     'prenom' => 'gaoussou',
//     'email' => 'afo@gmail.com',
//     'naissance'=>'2004-05-06',
//     'telephone' => '56040444',
//     'date_abonnement' => '2022-02-09',
// ]);}

}

