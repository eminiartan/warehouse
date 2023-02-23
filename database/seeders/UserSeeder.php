<?php

namespace Database\Seeders;

use App\Models\Depo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password'=>bcrypt('password'),
            'is_admin' => true,
//            [ 'depo_id' => Depo::create()->id]
        ]);
    }
}
