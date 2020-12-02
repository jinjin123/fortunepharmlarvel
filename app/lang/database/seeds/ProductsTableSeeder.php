<?php

class ProductsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
	DB::table('products')->truncate();
	
	$faker = Faker\Factory::create();
 
	for ($i = 0; $i < 100; $i++)
	{
 	 Product::create(array(
    'name' => $faker->userName,
    'cost' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000) ,
    'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 1000) ,
    'quantity' => $faker->numberBetween($min = 1, $max = 1000),
    'product_id' => $faker->numberBetween($min = 10000000, $max = 99999999),
    'category_id' => $faker->numberBetween($min = 10000000, $max = 99999999),
    'image_id' => $faker->numberBetween($min = 10000000, $max = 99999999),
 	 ));
	}

		//$this->call('AccountsTableSeeder');
	}

}
