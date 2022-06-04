@extends('layouts.app')

@section('content')
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.na{
    background-color: rgb(170, 3, 3);
    color: #fff;
    text-align: center;
    padding-top: 2%;
    contain: content ;
    font-size: 3em;
    height: 100px;

}

.formulaire {
    width: 40%;
    margin: 0px auto;
    display: block;
    justify-content: center;
    text-align: center;
    font-size: 20px;
    color: rgb(170, 3, 3);

}

.tout{
    align-content: center;
    justify-content: center;
    margin-top: 5%;
    margin-left: 40%;
    
}


input, textarea {
    width: 50%;
    height: 35px;
}

@media only screen and (max-width:1083px) {}
    .titre {
        font-size: 2.5em;
    }
    </style>


    <div class="na">
    LOGICIEL DE GESTION DES ABONNES AUF
    </div>
    <div class=" formulaire">
        <img src="{{asset('images/logo_auf.jpg')}}" alt="logo">
    </div>
    <div class="container">
        <div class="col">

         @csrf  
        <div class="tout">

            <legend for="">nom</legend>
            <input type="text" name="nom" class="un"> <br> <br>
            <legend for=""> prenom</legend>
            <input type="text" name="prenom" class="deux"> <br> 
            <br>
            <legend for="">naissance</legend>
            <input type="text" name="naissance" class="un"> <br> <br>
            <legend for=""> telephone</legend>
            <input type="text" name="telephone" class="deux"> <br> 
            <br>
            <legend for="">email</legend>
            <input type="text" name="email" class="un"> <br> <br>
            <legend for=""> date_abonnement</legend>
            <input type="text" name="date_abonnement" class="deux"> <br> 
            <br>
            <!-- <a href="./enregistrement.php" > </a> -->
            <button type="submit " class="btn btn-primary">Enregister<button>
            
            </div>
        </div>
    </div>
@endsection