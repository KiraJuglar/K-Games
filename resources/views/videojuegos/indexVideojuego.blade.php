@extends('layouts.web')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 uppercase">K LIBROS</h1>
        <h2 class="text-xl text-gray-600">Desarrolla, publica y compra asombrosos libros</h2>
        <h3 class="text-lg text-gray-600">Conocimiento y aprendizaje</h3>
    </div>
    
    <livewire:videojuegos-list></livewire:videojuegos-list>
    <div class="text-center">
        <a href='videojuego/create' class="text-lg text-gray-600" >Publicar libro</a><br>
    </div>
@endsection
