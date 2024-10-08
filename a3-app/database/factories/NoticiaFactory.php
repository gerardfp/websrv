<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(),
            'resumen' => $this->faker->paragraph(),
            'cuerpo' => $this->faker->paragraph(5)
        ];
    }
}
