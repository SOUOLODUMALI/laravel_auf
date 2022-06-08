
@extends('layouts.ap')

@section('content')

<style>
  *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
   
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

.retour{
    font-size: 2em;
    color:rgb(115, 10, 10);
    margin-left: 900px;
    border: 2px solid black;
    border-radius: 8px;
}
.bien{
    color:rgb(190, 11, 11);
    font-size: 2em;
}

 a{
    text-decoration: none;   
}
.table caption-top{
    color: rgb(196, 24, 24)!important;
}
h2{
    color:rgb(27, 17, 2);
    text-align: center;
    margin-top: 50px;
   
}
</style>





     <div class="bien"> 

  

  <h2 class="abonne">La liste des abonnés de l'A.U.F</h2>
 
<img src="{{asset('images/logo_auf.jpg')}}" alt="logo">
 


     <table class="table caption-top">
    <thead>
    <tr class="table-dark">
     
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">age</th>
      <th scope="col">email</th>
      <th scope="col">numero</th>
      <th scope="col">debut</th>
    </tr>
  </thead>
    ';
    
    
        <tr>
        
        <td>'.$data["nom"].'</td> 
        <td>'.$data["prenom"].'</td>  
        <td>'.$data["date_de_naissance"].'</td>
        <td>'.$data["email"].'</td>
        <td>'.$data["numero_de_telephone"].'</td>
        <td>'.$data["date_d_abonnement"].'</td>
      </tr>
        ';
    }

    </tbody>
</table>
    ';
}

</div>
  
<a href="{{{('accueil')}}" class=""><button type="submit" class=""> quitter</button> </a>
  


  



    <table class="table caption-top">
        <thead>
        <tr class="table-dark">
         
          <th scope="col">nom</th>
          <th scope="col">prenom</th>
          <th scope="col">email</th>
          <th scope="col">date_de_naissance</th>
          <th scope="col">filiere</th>
          <th scope="col">telephone</th>
          <th scope="col">informatio_du_tuteur</th>
        </tr>
      </thead>
        ';
        
            <tr>
            
            <td>'.$data["nom"].'</td> 
            <td>'.$data["prenom"].'</td>  
            <td>'.$data["email"].'</td>
            <td>'.$data["date_de_naissance"].'</td>
            <td>'.$data["filiere"].'</td>
            <td>'.$data["telephone"].'</td>
           
          </tr>
            ';
       
        </tbody>
    </table>
        ';
    
@endsection