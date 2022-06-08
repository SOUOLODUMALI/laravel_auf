
@extends('layouts.ap')

@section('content')
<style>
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-size: 20px;   
}

header{
    color: #fff;
    background-color: rgb(170, 3, 3);
    border: 1px solid black;
    float: 50%;
     height: 100px; 
    width: 100%;
}
h3{
    text-align: center;
    padding-top: 2%;
    contain: content ;
    font-size: 2em;
    
}
.admin{
    margin-left: 40%
}

.tout{
    align-content: center;
    justify-content: center;
    margin-top: 5%;
    margin-left: 40%;
    
}
</style>

</header> 
<div class="col formulaire">
        <img src="{{asset('images/logo_auf.jpg')}}" alt="logo">
    </div> 
<div class="admin">
  <strong> BIENVENU CHER ADMINSTRATEUR</strong> <br> <br>
    Veuillez VOUS INSCRIRE SVP
</div>

     
 
<div class="form">
    <div class="container">
        <div class="col-6 ofsset-3">
            <div class="tout">
       <form action="./transi.php" method="post">
           <legend for="">nom</legend>
            <input type="text" name="nom" id=""> <br> <br>
            <legend for="">prenom</legend>
            <input type="text" name="prenom" id=""> <br> <br>
            <legend for="">email</legend>
            <input type="text" name="email" id=""> <br> <br>
            <legend for=""> mot_de_pass</legend>
            <input type="password" name="mot_de_pass"> <br> <br>
            <legend for="">confirme le mot_de_pass</legend>
            <input type="password" name="mot_de_pass2"> <br> <br>
            <input   type="submit" value="Enregistrer" name="submit">  
          <a href="./accueil.php" ></a>
          </div>
            </div>   
        </div>
        
    </div>
@endsection
