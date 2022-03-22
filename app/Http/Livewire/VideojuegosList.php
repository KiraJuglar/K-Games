<?php

namespace App\Http\Livewire;

use App\Models\Videojuego;
use Livewire\Component;

class VideojuegosList extends Component
{
    public function render()
    {
        return view('livewire.videojuegos-list', [
            'videojuegos' => Videojuego::latest()->get()
        ]);
    }
}
