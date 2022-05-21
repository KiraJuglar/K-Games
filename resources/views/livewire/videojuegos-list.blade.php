<div class="grid grid-cols-3 gap-4 mt-8">
  @foreach ($videojuegos as $videojuego)
    @isset($user)
      @if ($videojuego->user == $user)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="/videojuego/{{$videojuego->id}}">
          <img src="{{ $videojuego->imagen }}" class="rounded-md mb-2" alt="">
          <h2 class="text-lg text-gray-600 truncate">{{ $videojuego->nombre }}</h2>
          <h3 class="text-md text-gray-500">{{ $videojuego->excerpt }}</h3>
          <h3 class="text-md text-gray-500">{{ $videojuego->categoria }}</h3>
          <h3 class="text-md text-gray-500">${{ $videojuego->precio }}</h3>

          </a>
        </div>  
      @endif  
    @else
      <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
      <a href="/videojuego/{{$videojuego->id}}">
        <img src="{{ $videojuego->imagen }}" class="rounded-md mb-2" alt="">
        <h2 class="text-lg text-gray-600 truncate">{{ $videojuego->nombre }}</h2>
        <h3 class="text-md text-gray-500">{{ $videojuego->excerpt }}</h3>
        <h3 class="text-md text-gray-500">{{ $videojuego->categoria }}</h3>
        <h3 class="text-md text-gray-500">${{ $videojuego->precio }}</h3>

        </a>
    </div>
    @endisset
  
  @endforeach
</div>