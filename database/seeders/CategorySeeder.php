<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		 $arrCate = ['Mạng máy tính', 'Kiểm thử phần mềm', 'Phát triển ứng dụng trên web','Phát triển ứng dụng trên mobile'];
		for ($i = 0; $i < count($arrCate); $i++) {
            DB::table('categories')->insert([
                'category_name' => $arrCate[$i],
            ]);
        }
		
    }
}
