<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker=Faker::create();
        $image=['img/blog/blog-1.jpg','img/blog/blog-2.jpg','img/blog/blog-3.jpg'];
        foreach($image as $img){
            for($i=0;$i<1;$i++){
                DB::table('blogs')->insert([
                    'title'=>$faker->sentence(6),
                    'image'=>$img,
                    'content'=>$faker->paragraph(6),
                    'created_at'=>$faker->dateTime('now'),
                    'updated_at'=>now()


                ]);
            }
        }


    }
}
