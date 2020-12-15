<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           'name'=>'ayse',
           'email'=>'aysetas@gmail.com',
           'password'=>'123456',
           'phone'=>'905345260054',
           'created_at'=>now(),
           'updated_at'=>now()


       ]);
    }
}
