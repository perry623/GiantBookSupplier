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

    public static $CATEGORY_COUNT = 10;

    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for($i=1; $i <=$this::$CATEGORY_COUNT; $i++){
            DB::table('categories')->insert(
                ['category'=> 'Buku Berwarna '.$faker->colorName]
            );
        }
    }
}
