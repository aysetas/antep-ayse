<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=[
            ["name"=>"et" , "price" =>10 , "description"=>"", "status"=>true, "photo" => "img/featured/feature-1.jpg", "category_id"=>1 ,"created_by"=>1],
            ["name"=>"muz" , "price" =>20 , "description"=>"","status"=>false, "photo" => "img/featured/feature-2.jpg" ,"category_id"=>2 ,"created_by"=>1],
            ["name"=>"incir" , "price" =>30 , "description"=>"", "status"=>true, "photo" => "img/featured/feature-3.jpg" ,"category_id"=>2 ,"created_by"=>1],
            ["name"=>"karpuz" , "price" =>40 , "description"=>"", "status"=>true,"photo" => "img/featured/feature-4.jpg" ,"category_id"=>2 ,"created_by"=>1],
            ["name"=>"yaban mersini" , "price" =>30 , "description"=>"", "status"=>true, "photo" => "img/featured/feature-5.jpg" ,"category_id"=>3 ,"created_by"=>1],
            ["name"=>"hamburger" , "price" =>20 , "description"=>"", "status"=>false, "photo" => "img/featured/feature-6.jpg" ,"category_id"=>3 ,"created_by"=>1],
            ["name"=>"mango" , "price" =>50 , "description"=>"",  "status"=>true,"photo" =>"img/featured/feature-7.jpg" ,"category_id"=>4 ,"created_by"=>1],
            ["name"=>"elma" , "price" =>10 , "description"=>"", "status"=>false,"photo" => "img/featured/feature-8.jpg" ,"category_id"=>4 ,"created_by"=>1]
        ];

            DB::table('products')->insert($products);


    }
}
