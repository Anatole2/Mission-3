@extends('template')
@section('contenu')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/flashDiapo01.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/flashDiapo02.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="images/flashDiapo03.jpg" class="d-block w-100">
      </div>
    </div>
  </div>
<br>
<center><a button type="button" class="btn btn-primary" href="{{route('ferry.index')}}">Voir les bateaux</a></center>
<br>
<center><a button type="button" class="btn btn-primary" href="{{route('register')}}">Créer un compte</a></center>
<br>
<center><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
<button class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
  {{ __('Logout') }}
</button></center>
@endsection