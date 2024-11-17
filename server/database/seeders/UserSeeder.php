<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user123'),
        ]);
    }
}
