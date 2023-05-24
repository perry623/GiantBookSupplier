<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\CategorySeeder;
use Database\Seeders\PublisherSeeder;

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
        
        $CATEGORY_COUNT = CategorySeeder::$CATEGORY_COUNT;
        $PUBLISHER_COUNT = PublisherSeeder::$PUBLISHER_COUNT;

        
        for($i=1; $i <=100; $i++){
            DB::table('books')->insert(
                ['title'=> 'Kisah '.$faker->name,
                'summary'=>$summary->realText($maxNbChars = 200, $indexSize = 2),
                'category_id'=> rand(1, $CATEGORY_COUNT),
                'publisher_id'=>  rand(1, $PUBLISHER_COUNT)]
            );
        }
    }
}
