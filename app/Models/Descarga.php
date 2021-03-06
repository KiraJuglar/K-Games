<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descarga extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class);
    }

    public function videojuegos(){
        return $this->hasMany(Videojuego::class);
    }

}
