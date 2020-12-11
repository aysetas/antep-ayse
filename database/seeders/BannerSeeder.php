<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners=['img/banner/banner-1.jpg','img/banner/banner-2.jpg'];
        foreach($banners as $banner)
        DB::table('banners')->insert([
         'photo'=>$banner
        ]);
    }
}
