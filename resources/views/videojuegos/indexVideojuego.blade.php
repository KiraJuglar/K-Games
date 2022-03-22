<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kira Games</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header class="shadow-lg">
    <div class="bg-blue-900 py-1"></div>
    <nav class="bg-blue-800 py-2">
      <a href="#">
        <img src="{{ asset('images/Logo.jpg') }}" alt="" class="h-8 mx-auto"> 
      </a>
    </nav>
  </header>
  <main class="py-10">
    <div class="container mx-auto px-4">

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
    <a href='videojuego/create'>Crear nuevo videojuego</a>
      @yield('content')
    </div>
  </main>
  <footer class="py-4 text-center">
    @auth
      <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">
        Dashboard
      </a>
    @else
      <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">
        Login
      </a>
      <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 underline">
        Register
      </a>
    @endauth
  </footer>
</body>
</html>