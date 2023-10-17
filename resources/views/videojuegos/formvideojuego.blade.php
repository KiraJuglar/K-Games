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

      <h1 class="text-3xl text-gray-700 uppercase">Publicar libro</h1>

      @isset($videojuego)
        <form action='/videojuego/{{ $videojuego->id }}' method='POST'>
        @method('PATCH')
      @else
        <form action='/videojuego' method='POST'>
      @endisset
        @csrf
        <label for='nombre'>Nombre del libro: </label><br>
        <input type='text' name='nombre' value={{ isset($videojuego) ? $videojuego->nombre : ''}}{{old('nombre')}}><br>
        <label for='precio'>Precio del libro: </label><br>
        <input type='text' name='precio' value={{ isset($videojuego) ? $videojuego->precio : ''}}{{old('precio')}}><br>
        <label for='descripcion'>Descripcion del libro: </label><br>
        <textarea name='descripcion' id='descripcion' cols=50 rows=5>{{ isset($videojuego) ? $videojuego->descripcion : ''}}{{old('descripcion')}}</textarea><br>
        <label for='categoria'>Categoria del libro: </label><br>
        <select name='categoria' id='categoria'><br>
          <option value='Accion' {{ isset($videojuego) && $videojuego->categoria == 'Accion' ? 'selected' : ''}}>Acción</option>
          <option value='Aventura' {{ isset($videojuego) && $videojuego->categoria == 'Aventura' ? 'selected' : ''}}>Aventura</option>
          <option value='Ciencia Ficción' {{ isset($videojuego) && $videojuego->categoria == 'Ciencia Ficción' ? 'selected' : ''}}>Ciencia Ficción</option>
          <option value='Drama' {{ isset($videojuego) && $videojuego->categoria == 'Drama' ? 'selected' : ''}}>Drama</option>
          <option value='Fantasía' {{ isset($videojuego) && $videojuego->categoria == 'Fantasía' ? 'selected' : ''}}>Fantasía</option>
          <option value='Historia' {{ isset($videojuego) && $videojuego->categoria == 'Historia' ? 'selected' : ''}}>Historia</option>
          <option value='Misterio' {{ isset($videojuego) && $videojuego->categoria == 'Misterio' ? 'selected' : ''}}>Misterio</option>
          <option value='Romance' {{ isset($videojuego) && $videojuego->categoria == 'Romance' ? 'selected' : ''}}>Romance</option>
          <option value='Terror' {{ isset($videojuego) && $videojuego->categoria == 'Terror' ? 'selected' : ''}}>Terror</option>
        </select><br>
        <input type='submit' value='Guardar'>
      </form>
    </div>

    <livewire:videojuegos-list></livewire:videojuegos-list>
@endsection