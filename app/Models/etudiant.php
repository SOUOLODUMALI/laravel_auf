<?php

namespace App\Models;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiants extends Model
{
    use HasFactory;

            protected $table='etudiants';
    protected $fillable =[
        'nom',
        'prenom',
        'naissance',
        'email',
        'telephone',
        'date_abonnement'
    ];
}
