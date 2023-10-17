@extends('layouts.web')

@section('content')
    <div class="grid grid-cols-3 gap-4">
        <div class="p-8 bg-gray-200 col-span-1">
            <img src="{{ $videojuego->imagen }}" class="rounded-md mb-2" alt="">
            @auth
            @if ($videojuego->user == $user)
                <ul class="flex flex-col">
                <li class="font-medium text-sm text-gray-400 uppercase mb-4">Opciones</li>
                </ul>
                
                <a href='{{$videojuego->id}}/edit' class="font-medium text-sm text-gray-400  mb-4">Modificar</a><br>
                <form action='{{$videojuego->id}}'method=POST>
                    @csrf
                    @method('DELETE')
                    <input class="font-medium text-sm text-gray-400  mb-4" type='submit' value='Borrar'>
                </form> 
            @endif
                <form action='/descarga' method=POST>
                @csrf
                    <input type="hidden" name="id" value='{{$videojuego->id}}'>
                    <input class="font-medium text-sm text-gray-400  mb-4" type='submit' 
                    name = '{{$videojuego}}' value='Descargar'>
                </form>
            @endauth
            
        </div>
        <div class="text-gray-700 col-span-2">
            <h2 class="text-3xl text-gray-700 uppercase">{{ $videojuego->nombre }}</h2>
            <p>{{ $videojuego->user->name }}</p>
            <p>{{ $videojuego->descripcion }}</p>
            <p>{{ $videojuego->categoria }}</p>
            <p>${{ $videojuego->precio }}</p>
            
        </div>

        
    </div>

    <div class="text-center">
        <h1 class="text-3xl text-gray-700 uppercase">KLIBROS</h1>
    </div>

    <livewire:videojuegos-list></livewire:videojuegos-list>
@endsection
    