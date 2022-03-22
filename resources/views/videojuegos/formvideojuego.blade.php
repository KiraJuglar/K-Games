@extends('layouts.web')

@section('content')
    <div class="text-center">
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif

      <h1 class="text-3xl text-gray-700 uppercase">Subir videojuego</h1>

      @isset($videojuego)
        <form action='/videojuego/{{ $videojuego->id }}' method='POST'>
        @method('PATCH')
      @else
        <form action='/videojuego' method='POST'>
      @endisset
        @csrf
        <label for='nombre'>Nombre del videojuego: </label><br>
        <input type='text' name='nombre' value={{ isset($videojuego) ? $videojuego->nombre : ''}}{{old('nombre')}}><br>
        <label for='precio'>Precio del videojuego: </label><br>
        <input type='text' name='precio' value={{ isset($videojuego) ? $videojuego->precio : ''}}{{old('precio')}}><br>
        <label for='descripcion'>Descripcion del videojuego: </label><br>
        <textarea name='descripcion' id='descripcion' cols=50 rows=5>{{ isset($videojuego) ? $videojuego->descripcion : ''}}{{old('descripcion')}}</textarea><br>
        <label for='categoria'>Categoria del videojuego: </label><br>
        <select name='categoria' id='categoria'><br>
          <option value='Accion' {{ isset($videojuego) && $videojuego->categoria == 'Accion' ? 'selected' : ''}}>Accion</option> 
          <option value='Estrategia' {{isset($videojuego) && $videojuego->categoria == 'Estrategia' ? 'selected' : ''}}>Estrategia</option> 
          <option value='RPG' {{ isset($videojuego) && $videojuego->categoria == 'RPG' ? 'selected' : ''}}>RPG</option> 
          <option value='Aventura' {{ isset($videojuego) && $videojuego->categoria == 'Aventura' ? 'selected' : ''}}>Aventura</option> 
          <option value='Rol' {{ isset($videojuego) && $videojuego->categoria == 'Rol' ? 'selected' : ''}}>Rol</option> 
          <option value='Mundo abierto' {{ isset($videojuego) && $videojuego->categoria == 'Mundo abierto' ? 'selected' : ''}}>Mundo abierto</option> 
          <option value='Disparos' {{ isset($videojuego) && $videojuego->categoria == 'Disparos' ? 'selected' : ''}}>Disparos</option> 
          <option value='Puzzle' {{ isset($videojuego) && $videojuego->categoria == 'Puzzle' ? 'selected' : ''}}>Puzzle</option> 
          <option value='Simulacion' {{ isset($videojuego) && $videojuego->categoria == 'Simulacion' ? 'selected' : ''}}>Simulacion</option> 
          <option value='Casual' {{ isset($videojuego) && $videojuego->categoria == 'Casual' ? 'selected' : ''}}>Casual</option> 
          <option value='Sigilo' {{ isset($videojuego) && $videojuego->categoria == 'Sigilo' ? 'selected' : ''}}>Sigilo</option> 
          <option value='Comedia' {{ isset($videojuego) && $videojuego->categoria == 'Comedia' ? 'selected' : ''}}>Comedia</option> 
        </select><br>
        <input type='submit' value='Guardar'>
      </form>
    </div>

    <livewire:videojuegos-list></livewire:videojuegos-list>
@endsection