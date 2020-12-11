<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class categorySliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CategorySlider=[
            ["name"=>"Fresh Fruit" , "photo" => "img/categories/cat-1.jpg"],
            ["name"=>"Dried Fruit" , "photo" => "img/categories/cat-2.jpg"],
            ["name"=>"Vegetables" , "photo" => "img/categories/cat-3.jpg"],
            ["name"=>"drink fruits" , "photo" => "img/categories/cat-4.jpg"],
            ["name"=>"drink fruits" , "photo" => "img/categories/cat-5.jpg"]
        ];
        DB::table('category_sliders')->insert($CategorySlider);
    }
}
