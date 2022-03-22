@extends('layouts.web')

@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="p-8 bg-gray-200 col-span-1">
            <ul class="flex flex-col">
            <li class="font-medium text-sm text-gray-400 uppercase mb-4">Contenido</li>
            </ul>
            <a href='{{$videojuego->id}}/edit' class="font-medium text-sm text-gray-400  mb-4">Modificar</a><br>
            <form action='{{$videojuego->id}}'method=POST>
                @csrf
                @method('DELETE')
                <input class="font-medium text-sm text-gray-400  mb-4" type='submit' value='Borrar'>
            </form> 
        </div>
        <div class="text-gray-700 col-span-2">
            <img src="{{ $videojuego->imagen }}" alt="">
            <h2 class="text-3xl text-gray-700 uppercase">{{ $videojuego->nombre }}</h2>
            <p>{{ $videojuego->descripcion }}</p>
            <p>{{ $videojuego->categoria }}</p>
            <p>${{ $videojuego->precio }}</p>
        </div>

        
    </div>

    <div class="text-center">
        <h1 class="text-3xl text-gray-700 uppercase">KGAMES</h1>
    </div>

    <livewire:videojuegos-list></livewire:videojuegos-list>
@endsection
    