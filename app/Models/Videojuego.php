<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    public function getExcerptAttribute()
    {
        return substr($this->descripcion,0,80) . "..." ;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

