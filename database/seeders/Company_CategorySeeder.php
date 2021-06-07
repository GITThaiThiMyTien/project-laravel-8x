<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Company_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('categories_companies')->insert([
                'category_id' => random_int(1, 10),
                'company_id' => random_int(1, 10),
                'status' =>random_int(0,1),
            ]);
        }
    }
}
