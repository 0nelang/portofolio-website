<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => '$2y$10$cJljZ8BeVZIEF6eVmePioODQtncD2FQwEJeKTFxDqgLRuqzr8qL12'
        ]);
        User::create([
            'name' => 'walikelas',
            'email' => 'walikelas@gmail.com',
            'role' => 'walikelas',
            'password' => '$2y$10$cJljZ8BeVZIEF6eVmePioODQtncD2FQwEJeKTFxDqgLRuqzr8qL12'
        ]);
    }
}
