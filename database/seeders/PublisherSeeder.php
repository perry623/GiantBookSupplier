<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $faker1 = Faker::create('en_ZA');
        
        for($i=1; $i <=5; $i++){
            DB::table('publishers')->insert(
                ['name'=> $faker->name,
                'phone'=>$faker1->mobileNumber,
                'email'=> $faker ->email,
                'address'=> $faker ->address]
            );
        }
    }
}
