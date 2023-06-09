<?php

namespace Database\Seeders;

use App\Models\Depo;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Depo::factory(2)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
            'depo_id' => 1,

        ]);

        \App\Models\User::factory()->create([
            'name' => 'chaggy',
            'email' => 'chaggy@test.com',
            'password' => bcrypt('password'),
            'is_admin' => false,
            'depo_id' => '2',
        ]);

        \App\Models\User::factory()
            ->count(15)
            ->create();
    }
}
