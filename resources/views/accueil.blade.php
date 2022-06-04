@extends('layouts.app')

@section('content')



<SECtion id="primary">
    <div class="logo">
       <img src="{{asset('/images/logo_auf.jpg')}}" alt="logo" height="" width=""> 
 <span>   Bienvenu cher adminstrateur</span>
    </div>
</SECtion>
<section id="abonne">
    <a href="{ route{('etudiant')}}"><h4 class="cas1">ajouter un abonne</h4></a>
    <a href="{ route{('liste')}}"><h4 class="cas2"> acceder la liste des abonnes</h4></a>
</section>

@endsection