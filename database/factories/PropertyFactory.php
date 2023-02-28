<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cost' => fake()->numberBetween(1, 1000),
            'price' => fake()->numberBetween(1, 15000),
            'color' => fake()->word,
            'dimension' => fake()->word,
            'image' => fake()->word,
            'category' => fake()->word,
        ];
    }
}
