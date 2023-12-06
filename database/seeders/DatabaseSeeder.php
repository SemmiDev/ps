<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $hashedPassword = bcrypt('password123');

        \App\Models\User::factory()->create([
            'name' => 'Yochiko Narasaki',
            'email' => 'yochiko@pentastore.com',
            'role' => 'Admin',
            'password' => $hashedPassword,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Fadil',
            'email' => 'fadil@pentastore.com',
            'role' => 'Admin',
            'password' => $hashedPassword,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Ghaza',
            'email' => 'ghaza@gmail.com',
            'role' => 'Customer',
            'password' => $hashedPassword,
        ]);
    }
}
