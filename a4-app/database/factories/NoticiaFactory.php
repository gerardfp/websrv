<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nada>
 */
class NoticiaFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "titulo" => $this->faker->sentence(),
            "cuerpo" => $this->faker->paragraphs(3, true),
            "enlace" => $this->faker->url(),
            "user_id" => 0
        ];
    }
}
