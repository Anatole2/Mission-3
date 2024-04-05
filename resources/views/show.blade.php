@extends('template')
@section('contenu')


<div class="card">
    <header class="card-header">
        <p class="card-header-title">
            <h1>{{$ferry->nom}}</h1>
            <img src="../images/{{$ferry->photo}}"> 
        </p>
    </header>

<div class="card-content">
    <div class="content">
        <p>Longueur : {{$ferry->longueur}}m <br>
            Largeur : {{$ferry->largeur}}m <br>
            Vitesse : {{$ferry->vitesse}} noeuds
        </p>
    </div>
</div>

<div class="card-content">
    <div class="content">
        <p><u><strong>Liste des équipements</strong></u><br>
        <ul>
         @foreach ($ferry->equipements as $equipement)
             <li>{{$equipement->libelle}}</li>
         @endforeach
        </ul>
        </p>
    </div>
</div>

</div>
<div class="d-flex justify-content-center mt-4">
    <a class="btn btn-info" href="{{url()->previous()}}">Retour</a>
</div>
@endsection