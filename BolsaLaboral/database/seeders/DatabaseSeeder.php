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
        //User::factory(10)->create();

        // User::create([
        //     'name' => 'Admin User',
        //     'user_id' => 'admin01',
        //     'email' => 'admin@egmail.com',
        //     'join_date' => now()->toDateString(),
        //     'phone_number' => '123-456-7890',
        //     'status' => 'active',
        //     'role_name' => 'admin', // Define el rol como admin
        //     'avatar' => 'https://example.com/avatar.jpg',
        //     'position' => 'Administrator',
        //     'department' => 'Management',
        //     'email_verified_at' => now(),
        //     'password' => bcrypt('admin123'), // Asegúrate de usar bcrypt
        // ]);
    }
}
