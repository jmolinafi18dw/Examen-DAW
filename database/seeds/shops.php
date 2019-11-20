<?php

use Illuminate\Database\Seeder;

class shops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    for ($i=1; $i <=3 ; $i++) { 
        DB::table('shops')->insert([
            'name' => Str::random(10),
            'description' => Str::random(100),
            'password' => Str::random(15),
            'email' => Str::random(10).'@gmail.com',
            'likes' => Str::random(5),
            ]);
    }         

    }
}
