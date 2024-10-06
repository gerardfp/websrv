<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'plot' => $this->faker->paragraph(),
            'poster_url' => '/poster.svg',
            'year' => $this->faker->numberBetween(1940, 2024),
            'rating' => 2.5
        ];
    }
}
