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
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin::factory()->create([
            'name' => 'admin',
            'password' => '$2y$10$kEZ3r.BiN09hvWUSv7jFUeZ.ztifT0QryJFUdESQqlli06CGSUPNK', // password
        ]);
    }
}
