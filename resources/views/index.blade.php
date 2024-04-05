@extends('template')
@section('contenu')

@if (session()->has('info'))
  <div class="alert alert-info alert-dismissible fade show js-alert" role="alert">
    <strong>{{session('info')}}</strong>
  </div>
@endif

<h1><center>Les ferrys</center></h1>
<br>
<center><a button type="button" class="btn btn-primary" href="{{route('ferry.create')}}">Ajouter un ferry</a></center>
<br>
<table class="table">
    <thead>
      <tr>
        <th class="table-danger" scope="col">Nom</th>
        <th class="table-danger" scope="col"></th>
        <th class="table-danger" scope="col"></th>
      </tr>
    </thead>
    @foreach($ferrys as $ferry)
    <tbody>
      <tr>
        <td>{{$ferry->nom}}</td>
        <td><a button type="button" class="btn btn-success" href="{{route('ferry.show',$ferry->id)}}">Voir</a></td>
        <td><form action="{{route('ferry.destroy', $ferry->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tbody>
    @endforeach
</table>
<br>
<div class="d-flex justify-content-center mt-3">
  <a href="{{route('pdf')}}" class="btn btn-outline-primary">Générer un PDF</a>
</div>
<br>
<center>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
<button class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
  {{ __('Logout') }}
</button>
</center>
</div>

@endsection