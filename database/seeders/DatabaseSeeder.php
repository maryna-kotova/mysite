<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'Demor',
            'email' => 'demo@gmail.com',
            'password' => Hash::make('demo'),
        ]);

        DB::table('roles')->insert([
            'name' => 'admin',
            'slug' => 'admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'user',
            'slug' => 'user',
        ]);

        DB::table('users_roles')->insert([
            'user_id' => 1,
            'role_id' => 1,
        ]);

        DB::table('users_roles')->insert([
            'user_id' => 2,
            'role_id' => 2,
        ]);

        DB::table('permissions')->insert([
            'name' => 'Users',
            'slug' => 'users',
        ]);

        DB::table('permissions')->insert([
            'name' => 'helper',
            'slug' => 'helper',
        ]);

        DB::table('permissions')->insert([
            'name' => 'Users in ban',
            'slug' => 'users-in-ban',
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 1,
            'permission_id' => 1,
        ]);
 
        DB::table('roles_permissions')->insert([
            'role_id' => 1,
            'permission_id' => 2,
        ]);

        DB::table('roles_permissions')->insert([
            'role_id' => 1,
            'permission_id' => 3,
        ]);

        DB::table('users_permissions')->insert([
            'user_id' => 1,
            'permission_id' => 1,
        ]);

        DB::table('users_permissions')->insert([
            'user_id' => 1,
            'permission_id' => 2,
        ]);

        DB::table('users_permissions')->insert([
            'user_id' => 1,
            'permission_id' => 3,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
