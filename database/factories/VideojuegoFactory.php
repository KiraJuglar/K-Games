<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videojuego>
 */
class VideojuegoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'user_id' => rand(1,10),
            'precio' => rand(0,1500),
            'descripcion' => $this->faker->text(800),
            'imagen' => $this->faker->imageURL(1280, 720),
            'categoria' => $this->faker->randomElement(['Accion', 'Aventura', 'RPG', 'Terror', 'Puzzle', 'Estrategia'])
        ];
    }
}
