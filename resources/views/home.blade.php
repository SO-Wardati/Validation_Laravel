@extends('layouts.base')

@section('Les bandes dessinées', 'Accueil')

@section('content')
<h1>Les personnages de bandes dessinées</h1>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/img/parc-spirou.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/Lucky Luke.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/titeuf.jpg" alt="Third slide">
        </div>
    </div>
</div>


@endsection
