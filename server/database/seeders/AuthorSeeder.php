<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::create([
            'name' => 'Wesley Ricardo Lamb',
            'email' => 'wesley@email.com',
        ]);

        Author::create([
            'name' => 'Valdir Rugiski Jr',
            'email' => 'valdir@email.com',
        ]);

        Author::create([
            'name' => 'Fabricio Bizotto',
            'email' => 'fabricio@email.com',
        ]);
    }
}
