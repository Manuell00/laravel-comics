<!-- Nell'extend dell'home inserirò tutti i segnaposto yeld caratteristici della pagina home -->

<!-- Estendo la pagina layouts.main-layout -->
@extends('layouts.main-layout')

<!-- Nel segnaposto 'title' -->
@section('title')
home
@endsection


<!-- Nel segnaposto 'jumbotron' -->
@section('title')
<!-- Definisco il Jumbotron -->
<div id="jumbotron">
    <div class="bg-container">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}">
        <span id="current-series">CURRENT SERIES</span>
    </div>

    <!-- Definisco il contenitore delle cards -->
    <div class="cards-container">

        @foreach($fumetti as $fumetto)
        {{$fumetto['title']}}

        @endforeach

        <!-- Definisco la linea per il button LOAD MORE -->
        <div id="load">
            <span id="load-button">LOAD MORE</span>
        </div>
    </div>
</div>
@endsection