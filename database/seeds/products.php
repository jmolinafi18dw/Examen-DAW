<?php

use Illuminate\Database\Seeder;

class products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <10 ; $i++) { 
            DB::table('products')->insert([
                'name' => Str::random(10),
                'description' => Str::random(10),
                'stock' => Str::random(5),
                'price' => Str::random(5),
                ]);
        }
       
    }
}
