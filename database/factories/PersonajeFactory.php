<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonajeFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'nivel' => fake()->numberBetween(-10000, 10000),
            'clase' => fake()->word(),
            'raza' => fake()->word(),
            'aliniamiento' => fake()->word(),
            'historia' => fake()->text(),
        ];
    }
}
