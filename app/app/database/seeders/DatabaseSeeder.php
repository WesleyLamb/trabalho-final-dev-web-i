<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            UserSeeder::class,
            UserPermissionSeeder::class,
            AuthorSeeder::class,
            DocumentSeeder::class,
            DocumentAuthorSeeder::class,
        ]);
        // Artisan::call('db:seed', [
        //     '--class' => AuthorSeeder::class,
        // ]);
        // Artisan::call('db:seed', [
        //     '--class' => DocumentSeeder::class,
        // ]);
        // Artisan::call('db:seed', [
        //     '--class' => DocumentAuthorSeeder::class,
        // ]);
        // $this->call(AuthorSeeder::class);
        // $this->call(DocumentSeeder::class);
        // $this->call(DocumentAuthorSeeder::class);
        // $this->call(DocumentSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
