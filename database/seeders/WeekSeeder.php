<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++) {
            DB::table('weeks')->insert([
                'week_weekdays' =>  Str::random(10),
                'status_check' => random_int(0,1),
                'diary_id' => random_int(0,10),
                'status' => random_int(0,1),
            ]);
        }
    }
}
