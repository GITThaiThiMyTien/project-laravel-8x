<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrTypeName = ['Sinh viên', 'Giáo viên', 'Trainer'];
        for ($i = 0; $i < count($arrTypeName); $i++) {
            DB::table('types')->insert([
                'type_name' => $arrTypeName[$i],
                'status' =>random_int(0,1),
            ]);
        }
    }
}
