<!-- Estendo la pagina layouts.main-layout -->
@extends('layouts.main-layout')

<!-- Nel segnaposto 'title' -->
@section('title')
About
@endsection


@section('jumbotron')

<div class="text-center">
    <h1>{{ $fumetti[0]['title'] }}</h1>
    <a href="{{ route('home') }}" class="text-decoration-none">HOME</a>
</div>

@endsection