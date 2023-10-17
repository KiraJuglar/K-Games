@extends('layouts.web')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 uppercase">K BOOKS</h1>
        <h2 class="text-xl text-gray-600">Publica y compra asombrosos libros</h2>
        <h3 class="text-lg text-gray-600">Conocimiento y aprendizaje</h3>
        <h3 class="text-lg text-gray-600">Libro Comprado</h3>
    </div>

    <livewire:videojuegos-list></livewire:videojuegos-list>
    <div class="text-center">
        <a href='videojuego/create' class="text-lg text-gray-600" >Crear videojuego</a><br>
    </div>
@endsection
