<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrGroupName = ['FE2', 'BE2', 'FE1','BE1'];
        for ($i = 0; $i < count($arrGroupName); $i++) {
            DB::table('groups')->insert([
                'group_name' => $arrGroupName[$i],
                'status' =>random_int(0,1),
            ]);
        }
    }
}
