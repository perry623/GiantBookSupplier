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

        $link_books =[
            'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/yellow-business-leadership-book-cover-design-template-dce2f5568638ad4643ccb9e725e5d6ff.jpg?ts=1637017516',
            'https://d1csarkz8obe9u.cloudfront.net/posterpreviews/action-thriller-book-cover-design-template-3675ae3e3ac7ee095fc793ab61b812cc_screen.jpg?ts=1637008457',
            'https://marketplace.canva.com/EAFKA0RgDtw/1/0/1003w/canva-brown-and-orange-elegant-simple-young-adult-fantasy-book-cover-Qb8uSVdJDzw.jpg',
            'https://template.canva.com/EADaopxBna4/1/0/251w-ujD6UPGa9hw.jpg'
        ];
        for($i=1; $i <=$this::$BOOK_COUNT; $i++){
            DB::table('books')->insert(
                ['title'=> $summary->realText($maxNbChars = 20, $indexSize = 2),
                'author'=> $faker->name,
                'year'=> $faker->date('Y'),
                'synopsis'=>$summary->realText($maxNbChars = 300, $indexSize = 2),
                'publisher_id'=>  rand(1, $PUBLISHER_COUNT),
                'image'=>$link_books[rand(0,3)]]
            );
        }
    }
}
