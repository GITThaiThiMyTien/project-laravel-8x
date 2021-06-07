<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrClass = ['CD19TT1', 'CD19TT2', 'CD19TT3','CD19TT4'];
        for ($i = 0; $i < count($arrClass); $i++) {
            DB::table('classes')->insert([
                'class_name' => $arrClass[$i],
                'status' =>random_int(0,1),
                'course_id' =>random_int(0,4),
            ]);
        }
    }
}
