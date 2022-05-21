@extends('layouts.web')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 uppercase">K GAMES</h1>
        <h2 class="text-xl text-gray-600">Desarrolla, publica y compra asombrosos videojuegos</h2>
        <h3 class="text-lg text-gray-600">Gran crecimiento y diversion</h3>
        <h3 class="text-lg text-gray-600">Juego Descargado</h3>
    </div>

    <livewire:videojuegos-list></livewire:videojuegos-list>
    <div class="text-center">
        <a href='videojuego/create' class="text-lg text-gray-600" >Crear videojuego</a><br>
    </div>
@endsection
