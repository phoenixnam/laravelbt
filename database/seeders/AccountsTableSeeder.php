<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('accounts')->insert([
        //     [
        //         'email' => 'phuong@gmail.com',
        //         'password' => bcrypt('123'),
        //         'is_active' =>true
        //     ],
        //     // Các dòng dữ liệu khác (nếu có)
        // ]);
        $faker =Faker::create();
        $limit=10;

        for($i=2; $i<=$limit; $i++){
            DB::table('accounts')->insert([
                'id'=>$i,
                'email' => $faker->unique->email,
               'password' => bcrypt($faker->password),
               'is_active' =>true
            ]);
        }
    }
}

