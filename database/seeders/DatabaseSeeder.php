<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin.ici@mahdev.com',
            'role' => 'admin',
            'password' => bcrypt('qwerty123'),
        ]);

        User::create([
            'name' => 'user',
            'email' => 'iciregional@mahdev.com',
            'role' => 'user',
            'password' => bcrypt('qwerty123'),
        ]);
    }
}
