<?php

namespace Database\Seeders;

use App\Models\Publisher;
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


    public static $PUBLISHER_COUNT = 8;

    public function run()
    {
        $faker = Faker::create('id_ID');
        $link_logo =['https://logos-world.net/wp-content/uploads/2020/10/Free-Emblem.png',
                    'https://99designs-blog.imgix.net/blog/wp-content/uploads/2013/04/pub25.png?auto=format&q=60&fit=max&w=930',
                    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRs51GwzcVw34w0mKrzwOhOqOLic5Sf7EGP1o6oiCW4sJ_C8VGeCydeoiygiJmrIiTAuh4&usqp=CAU',
                    'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8YXydf_BRwVKFkGp3osZysBJ84C5e72vy-ZtPqM8BPJ1Rm46Crw78Xl46awOqQWgGmuc&usqp=CAU',
                ];
        for($i=1; $i <=$this::$PUBLISHER_COUNT; $i++){
            Publisher::create(
                ['name'=> $faker->company,
                'phone'=>$faker->phoneNumber,
                'email'=> $faker ->email,
                'logo'=> $link_logo[rand(0,3)],
                'address'=> $faker ->address]
            );
        }
    }
}
