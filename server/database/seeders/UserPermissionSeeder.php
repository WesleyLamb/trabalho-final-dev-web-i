<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use App\Models\UserPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::where('email', 'admin@email.com')->first();
        $user2 = User::where('email', 'user@email.com')->first();

        UserPermission::create([
            'user_id' => $user1->id,
            'permission_id' => Permission::where('permission', 'admin')->first()->id,
        ]);

        UserPermission::create([
            'user_id' => $user2->id,
            'permission_id' => Permission::where('permission', 'authors')->first()->id,
        ]);

        UserPermission::create([
            'user_id' => $user2->id,
            'permission_id' => Permission::where('permission', 'documents')->first()->id,
        ]);
    }
}
