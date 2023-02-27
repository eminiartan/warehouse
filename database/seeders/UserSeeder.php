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
//         $depo = Depo::limit(2)->get();
//        $depo = Depo::factory(2)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password'=>bcrypt('password'),
            'is_admin' => true,


        ]);

        \App\Models\User::factory()->create([
            'name' => 'chaggy',
            'email' => 'chaggy@test.com',
            'password'=>bcrypt('password'),
            'is_admin' => false,
        ]);

        \App\Models\User::factory()
            ->count(10)
            ->create();
    }
}
