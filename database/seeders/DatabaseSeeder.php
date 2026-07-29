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
        $this->call([
            UserSeeder::class,
            SpaSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Admin Menorah',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        User::factory(25)->create();
    }
}
