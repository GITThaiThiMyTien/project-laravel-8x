<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class User_PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('users_permissions')->insert([
                'user_id' => random_int(1, 20),
                'permission_id' => random_int(1, 20),
                'status' =>random_int(0,1),
            ]);
        }
    }
}
