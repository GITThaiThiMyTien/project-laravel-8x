<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 500; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'password' => Str::random(10),
                'email' => Str::random(5) . '@gmail.com',
                'status' =>random_int(0,1),
            ]);
        }
    }
}
