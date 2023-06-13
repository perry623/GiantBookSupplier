<?php

namespace Database\Seeders;

use App\Models\Category as ModelCategory;
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

    public static $CATEGORY_COUNT = 15;
    
    public function run()
    {
        $categories = ["Romance","Thriller","Fantasy","Science Fiction","Mystery","Historical Fiction","Biography","Self-Help","Business","Cooking","Art","History","Travel","Young Adult","Science"];
        

        
        for($i=1; $i <$this::$CATEGORY_COUNT; $i++){
            ModelCategory::create(
                ['category'=> $categories[$i-1]]
            );
        }
    }
}
