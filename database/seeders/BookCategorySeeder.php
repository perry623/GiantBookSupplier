<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\CategorySeeder;
use Database\Seeders\BookSeeder;
use Illuminate\Support\Facades\DB;



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
            for($j=1; $j <=rand(1,4); $j++){
                DB::table('book_categories')->insert(
                    ['category_id'=>  rand(1, $CATEGORY_COUNT-1),
                    'book_id'=>$i]
                );

            }

        }
    }
}
