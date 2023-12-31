<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'user']);
        // Role::create(['name' => 'teacher']);
        Role::create(['name' => 'admin']);

        User::create([
          'name' => 'admin',
          'email' => 'admin@example.com',
          'password' => bcrypt('oluleye123'),
          'role_id' => 2,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
