<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K Games</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <header class="shadow-lg">
    <div class="bg-blue-900 py-1"></div>
      <a href="/">
        <img src="{{ asset('images/Logo.png') }}" alt="" class="h-8 mx-auto"> 
      </a>
    <nav class="bg-blue-800 py-2 text-center">
      
      @auth
      <a href="{{ url('dashboard') }}" class=" underline">
        Dashboard
      </a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            this.closest('form').submit();">
            Salir
        </a>
        <div class="text-center">
          <a href='videojuego/create' class="text-lg" >Crear videojuego</a><br>
        </div>
      </form>
      @else
        <a href="{{ url('login') }}" class="text-sm  underline">
          Inicia sesion
        </a>
        <a href="{{ url('register') }}" class="ml-4 text-sm  underline">
          Registrarse
        </a>
        
      @endauth
      
      </a>
    </nav>
  </header>
  <main class="py-10">
    <div class="container mx-auto px-4">
      @yield('content')
    </div>
  </main>
  <footer class="py-4 text-center">
    
  </footer>
</body>
</html>