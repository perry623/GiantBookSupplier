<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public static $CATEGORY_COUNT = 45;
    
    public function run()
    {
        $categories = ["Romance","Thriller","Fantasy","Science Fiction","Mystery","Historical Fiction","Biography","Self-Help","Business","Cooking","Art","History","Travel","Young Adult","Science","Horror","Poetry","Memoir","Religion","Psychology","Dystopian","Adventure","Humor","Suspense","Graphic Novels","Classics","Literary Fiction","Crime","Philosophy","Parenting","Sports","Education","Health and Fitness","Technology","Environment","Music","Fashion","Sociology","Economics","Political Science","True Crime","Children's","Architecture","Gardening"];
        

        
        for($i=1; $i <$this::$CATEGORY_COUNT; $i++){
            DB::table('categories')->insert(
                ['category'=> $categories[$i-1]]
            );
        }
    }
}
