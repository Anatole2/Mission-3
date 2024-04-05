<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des ferrys</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th{
            border: 1px solid black;
            padding: 10px;
            font-weight: bold;
        }
        td{
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <center><h1>{{$titre}}</h1>
    <p><em>Date : {{$date}}</em></p></center>
    <p>
        @foreach ($ferrys as $ferry)
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    <center><h1>{{$ferry->nom}}</h1></center>
                    <img src="{{ public_path('images/'.$ferry->photo) }}">
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
                <p><u><strong>Liste des équipements :</strong></u><br>
                <ul>
                @foreach ($ferry->equipements as $equipement)
                     <li>{{$equipement->libelle}}</li>
                @endforeach
                </ul>
                </p>
            </div>
        </div>
        @endforeach
        </div>
</body>
</html>