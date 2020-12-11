<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Category=['Oranges','Fresh Meat','Vega Tables','FastFood'];
        foreach($Category as $category){
            DB::table('categories')->insert([
                'name'=>$category,
                'created_at'=>now(),
                'updated_at'=>now()

            ]);
        }
    }
}
