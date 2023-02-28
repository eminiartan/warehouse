<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DetailFactory extends Factory
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
            'product_id' =>fake()->numberBetween([1,100000]),
        ];
    }
}
