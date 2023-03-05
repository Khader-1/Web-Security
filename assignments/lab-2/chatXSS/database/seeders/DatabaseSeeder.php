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
        \App\Models\User::create([
            'name' => 'Khader Khudair',
            'email' => 'kkhudair16@gmail.com',
            'password'=> bcrypt('12345678'),
        ]);

        \App\Models\User::create([
            'name' => 'Khader Karaja',
            'email' => 'kkaraja@gmail.com',
            'password'=> bcrypt('12345678'),
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
