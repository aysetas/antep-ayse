<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this ->call(CategorySeeder::class);
        $this ->call(productSeeder::class);
        $this ->call(BannerSeeder::class);
        $this ->call(CategorySliderSeeder::class);
        $this ->call(BlogSeeder::class);
    }
}
