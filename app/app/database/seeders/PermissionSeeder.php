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
            'permission' => 'authors'
        ]);
        Permission::create([
            'permission' => 'authors:create'
        ]);
        Permission::create([
            'permission' => 'authors:update'
        ]);
        Permission::create([
            'permission' => 'authors:delete'
        ]);

        // Manage Documents permissions
        Permission::create([
            'permission' => 'documents'
        ]);
        Permission::create([
            'permission' => 'documents:create'
        ]);
        Permission::create([
            'permission' => 'documents:update'
        ]);
        Permission::create([
            'permission' => 'documents:delete'
        ]);
    }
}
