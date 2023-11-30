<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(80)->create();

        User::factory()->create([
            'name' => 'felipe',
            'email' => '1@example.com',
        ]);
        User::factory()->create([
            'name' => 'miguel',
            'email' => '2@example.com',
        ]);
        User::factory()->create([
            'name' => 'felipe2',
            'email' => '22@example.com',
        ]);
        User::factory()->create([
            'name' => 'miguel 2',
            'email' => '6@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test User',
            'email' => '8@example.com',
        ]);
        User::factory()->create([
            'name' => 'one',
            'email' => '7@example.com',
        ]);
    }
}
