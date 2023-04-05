<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::factory(500)
            ->create()
            ->each(function ($product) {
                Property::factory(1)
                    ->create([
                    'product_id' => $product->id
                ]);
            });
    }
}
