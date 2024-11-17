<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin permissions
        Permission::create([
            'permission' => 'admin'
        ]);

        // Manage Authors permissions
        Permission::create([
            'permission' => 'author'
        ]);
        Permission::create([
            'permission' => 'author.create'
        ]);
        Permission::create([
            'permission' => 'author.update'
        ]);
        Permission::create([
            'permission' => 'author.delete'
        ]);
        Permission::create([
            'permission' => 'document.create'
        ]);
        Permission::create([
            'permission' => 'document.update'
        ]);
        Permission::create([
            'permission' => 'document.delete'
        ]);
    }
}
