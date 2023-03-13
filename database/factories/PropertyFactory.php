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
        $color =['Red', 'Green', 'Blue', 'Yellow', 'Orange', 'Purple', 'Pink', 'Brown', 'Black', 'White'];
        return [
            'cost' => fake()->numberBetween(100, 1000),
            'price' => fake()->numberBetween(500, 15000),
            'color' => fake()->randomElement($color),
            'dimension' => fake()->word,
            'image' => fake()->word,
            'category' => fake()->word,
        ];
    }
}
