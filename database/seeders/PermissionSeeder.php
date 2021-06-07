<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrPermissionName = ['read','modify','none','add'];
        for ($i = 0; $i < count($arrPermissionName); $i++) {
            DB::table('permissions')->insert([
                'permission_name' => $arrPermissionName[$i],
                'status' =>random_int(0,1),
            ]);
        }
    }
}
