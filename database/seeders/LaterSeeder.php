<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products=[
            ["title"=>"Latest Products","name"=>"Crab Pool Security" , "price" =>10 , "photo" => "img/latest-product/lp-1.jpg"],
            ["title"=>"Top Rated Products","name"=>"Crab Pool Security" , "price" =>20 , "photo" => "img/latest-product/lp-2.jpg"],
            ["title"=>"Review Products","name"=>"Crab Pool Security" , "price" =>30 , "photo" => "img/latest-product/lp-3.jpg"]

        ];

            DB::table('laters')->insert($products );

    }
}
