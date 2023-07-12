<!-- Nell'extend dell'home inserirò tutti i segnaposto yeld caratteristici della pagina home -->

<!-- Estendo la pagina layouts.main-layout -->
@extends('layouts.main-layout')

<!-- Nel segnaposto 'title' -->
@section('title')
home
@endsection


<!-- Nel segnaposto 'jumbotron' -->
@section('jumbotron')

<!-- Definisco il Jumbotron -->
<div id="jumbotron">
    <div class="bg-container">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}">
        <span id="current-series">CURRENT SERIES</span>
    </div>

    <!-- Definisco il contenitore delle cards -->
    <div class="container">

        <!-- Ciclo i dati passati nella routes -->
        @foreach($fumetti as $fumetto)

        <div class="card">
            <h2>{{$fumetto['title']}}</h2>

            <p>{{$fumetto['description']}}</p>

            <div>
                <span>Prezzo: </span><b>{{$fumetto['price']}}</b>
            </div>

            <h5>Lista degli artisti : </h5>
            <ul>
                @foreach($fumetto['artists'] as $artist)
                <li> {{$artist}}</li>
                @endforeach
            </ul>

        </div>


        @endforeach

        <!-- Definisco la linea per il button LOAD MORE -->
        <div id="load">
            <span id="load-button">LOAD MORE</span>
        </div>
    </div>
</div>
@endsection