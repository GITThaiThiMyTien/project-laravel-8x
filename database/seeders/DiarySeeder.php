<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrDiaryName = ['Báo cáo lần 1', 'Báo cáo lần 2', 'Báo cáo lần 3','Báo cáo lần 4','Báo cáo lần 5'];
        for ($i = 0; $i < count($arrDiaryName); $i++) {
            DB::table('diaries')->insert([
                'diary_name' => $arrDiaryName[$i],
                'user_id' =>random_int(0,8),
                'status' =>random_int(0,1),
            ]);
        }
    }
}
