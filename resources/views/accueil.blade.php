@extends('layouts.ap')

<style>
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-size: 20px;   
}


.tout{
    align-content: center !important;
    justify-content: center !important;
    margin-top: 5%!important;
    margin-left: 40% !important;
    
}
header{
    color: #fff;
     background-color: rgb(170, 3, 3); 
    /* border: 1px solid black; */
    float: 50%;
     height: 100px; 
    width: 100%;
}
h3{
    text-align: center;
    padding-top: 2%;
    contain: content ;
    font-size: 3em !important;

}


 div{
    margin-top: 7%; 
} 
 .logo span{
    font-size: 3em;
    margin-left: 25%;
    color:  rgb(170, 3, 3); 
}
#abonne {
display: flex;
margin-top: 10%;
margin-left: 30%;
font-size: 2em;

}
.cas1{
    color: rgb(170, 3, 3) ;
    border: 2px solid black;
    height: 90px;
    width: 200px;
}
.cas2{
    color: rgb(170, 3, 3) ; 
    border: 2px solid black; 
    margin-left: 5%;
    height: 90px;
    width: 250px;
}
.point{
    opacity: 40%;
}
 a {
    text-decoration: none;
    color:green;   
}

</style>


@section('content')


<header> <h3>   Bienvenu cher adminstrateur</h3></header>
<SECtion id="primary">
    <div class="logo">
       <img src="{{asset('/images/logo_auf.jpg')}}" alt="logo" height="" width=""> 

    </div>
</SECtion>
<section id="abonne">
    <a href="{ {route('etudiant')}}"><h4 class="cas1">ajouter un abonne</h4></a>
    <a href="{{ route('abonne.accueil')}}"><h4 class="cas2"> acceder la liste des abonnes</h4></a>
</section>

@endsection