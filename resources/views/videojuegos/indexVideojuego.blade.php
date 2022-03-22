@extends('layouts.web')

@section('content')
    <div class="text-center">
        <h1 class="text-3xl text-gray-700 uppercase">K GAMES</h1>
        <h2 class="text-xl text-gray-600">Desarrolla, publica y compra asombrosos videojuegos</h2>
        <h3 class="text-lg text-gray-600">Gran crecimiento y diversion</h3>
    </div>
    
    <livewire:videojuegos-list></livewire:videojuegos-list>

    <a href='videojuego/create'>Crear videojuego</a><br>
@endsection
<!--    
<h1>Informacion de videojuegos</h1>
    <table>
        <tr>    
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoria</th>
            <th>Descripcion</th>
        </tr>
        @foreach($videojuegos as $videojuego)  
        <tr>    
            <td>{{ $videojuego->nombre }}</td>
            <td>{{ $videojuego->precio }}</td>
            <td>{{ $videojuego->categoria }}</td>
            <td>{{ $videojuego->descripcion }}</td>
            <td>
                <a href='videojuego/{{$videojuego->id}}'>Ver detalles</a><br>
                <a href='videojuego/{{$videojuego->id}}/edit'>Modificar</a><br>
                <form action='videojuego/{{$videojuego->id}}'method=POST>
                    @csrf
                    @method('DELETE')
                    <input type='submit' value='Borrar'>
                </form>
            </td>
        </tr>   
        @endforeach 
    </table>
    -->