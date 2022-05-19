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
      <a href="/videojuego">
        <img src="{{ asset('images/Logo.jpg') }}" alt="" class="h-8 mx-auto"> 
      </a>
      @auth
      <a href="{{ url('dashboard') }}" class=" text-center underline">
        Dashboard
      </a>
      @else
        <a href="{{ url('login') }}" class="text-sm text-center underline">
          Login
        </a>
        <a href="{{ url('register') }}" class="ml-4 text-sm text-center underline">
          Register
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