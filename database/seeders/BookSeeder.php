<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\PublisherSeeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     
    public static $BOOK_COUNT = 100;

    public function run()
    {

        $faker = Faker::create('id_ID');
        $summary = Faker::create('en_US');
        
        $PUBLISHER_COUNT = PublisherSeeder::$PUBLISHER_COUNT;

        
        for($i=1; $i <=$this::$BOOK_COUNT; $i++){
            DB::table('books')->insert(
                ['title'=> 'Kisah '.$faker->name,
                'synopsis'=>$summary->realText($maxNbChars = 200, $indexSize = 2),
                'publisher_id'=>  rand(1, $PUBLISHER_COUNT),
                'image'=>'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/action-thriller-book-cover-design-template-3675ae3e3ac7ee095fc793ab61b812cc_screen.jpg?ts=1637008457']
            );
        }
    }
}
