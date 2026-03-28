<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Head Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), 
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Simple Author',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        \App\Models\Author::factory(3)
        ->has(\App\Models\Book::factory(2))
        ->create();
    }
}
