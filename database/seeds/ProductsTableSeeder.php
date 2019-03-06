<?php

use Illuminate\Database\Seeder;
use \App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 16; $i++) {
            Product::create([
                'name' => $faker->name,
                'quantity'=>$faker->numberBetween(0, 100000),
                'price'=>$faker->numberBetween(0,20000)
                
                
            ]);
        }
    }
}
