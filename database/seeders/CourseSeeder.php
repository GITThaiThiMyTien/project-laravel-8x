<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrCourse = ['Thục tập doanh nghiệp', 'Thục tập tốt nghiệp', 'Chuyên đề CMS'];
        for ($i = 0; $i < count($arrCourse); $i++) {
            DB::table('courses')->insert([
                'course_name' => $arrCourse[$i],
                'course_semester' =>random_int(2,6),
                'course_year' => random_int(2,4),
                'status' =>random_int(0,1)
            ]);
        }
    }
}
