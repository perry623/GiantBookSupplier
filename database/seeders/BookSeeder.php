<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $summary = Faker::create('en_US');
        
        for($i=1; $i <=5; $i++){
            DB::table('books')->insert(
                ['title'=> 'Kisah '.$faker->name,
                'summary'=>$summary->realText($maxNbChars = 200, $indexSize = 2),
                'category_id'=> $i,
                'publisher_id'=>  $i]
            );
        }
    }
}
