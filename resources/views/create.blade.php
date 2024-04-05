@section('contenu')
@extends('template')

<h1>Création d'un ferry</h1>
<br>

<form action="{{route('ferry.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nom" class="form-label">Nom du ferry</label>
      <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom"
      placeholder="Nom du ferry" value="{{old('nom')}}">
        @error('nom')
          <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="nom" class="form-label">Longueur</label>
        <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="longueur" id="longueur"
        placeholder="Longueur en mètres" value="{{old('longueur')}}">
          @error('longueur')
            <div class="invalid-feedback">{{$message}}</div>
          @enderror
    </div>

    <div class="mb-3">
        <label for="nom" class="form-label">Largeur</label>
        <input type="text" class="form-control @error('largeur') is-invalid @enderror" name="largeur" id="largeur"
        placeholder="Largeur en mètres" value="{{old('largeur')}}">
            @error('largeur')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="nom" class="form-label">Vitesse</label>
        <input type="text" class="form-control @error('vitesse') is-invalid @enderror" name="vitesse" id="vitesse"
        placeholder="Vitesse en noeuds" value="{{old('vitesse')}}">
            @error('vitesse')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="nom" class="form-label">Télécharger la photo</label>
        <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" id="photo"
        value="{{old('photo')}}">
          @error('photo')
            <div class="invalid-feedback">{{$message}}</div>
          @enderror
    </div>

    <div class="mb-3">
      <p>Equipements disponibles :</p>
        @foreach ($equipements as $equipement)
            <input type="checkbox" name="equipement_id[]" value='{{$equipement->id}}'>{{$equipement->libelle}}
            <br>
        @endforeach
    </div>
  
    <div class="control">
      <button class="btn btn-primary">Envoyer</button>
    </div>
  </form>

  <div class="control">
    <a class="btn btn-info" href="{{url()->previous()}}">Retour</a>
  </div>

@endsection