<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

//        Product::factory(10)->create();

        \App\Models\Detail::factory(10)->create();
    }
}
