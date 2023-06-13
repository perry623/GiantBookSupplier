<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

use Database\Seeders\BookSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $CATEGORY_COUNT = CategorySeeder::$CATEGORY_COUNT;
        $BOOK_COUNT = BookSeeder::$BOOK_COUNT;


        for($i=1; $i <=$BOOK_COUNT; $i++){
            $array =[];
            for($j=1; $j <=rand(1,4); $j++){
                $random = rand(1, $CATEGORY_COUNT-1);
                while (in_array($random, $array)) {
                    $random = rand(1, $CATEGORY_COUNT-1);
                }
                array_push($array, $random);
                
                BookCategory::create(
                    ['category_id'=>  $random,
                    'book_id'=>$i]
                );

            }

        }
    }
}
