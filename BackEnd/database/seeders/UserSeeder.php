<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
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
        $faker = Faker::create('vi_VN');
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                [   'full_name'=>$faker->lastName.' '.$faker->middleNameMale . ' '. $faker->firstNameMale,
                    'email'=> $faker->email,
                    'password' => bcrypt('secret'),
                    'phone' =>$faker->PhoneNumber,
                    'address' => $faker->Address,
                    'point' => random_int(0,999),
                    'rank_id'=>6,
//                    'remember_token'=>Str::random(10) ko biet lam nhu nao
                ],
            ]);
        }
    }
}
