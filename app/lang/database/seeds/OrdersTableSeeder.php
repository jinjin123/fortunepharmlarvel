<?php

class OrdersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
	DB::table('orders')->truncate();
	
	$faker = Faker\Factory::create();
 
	for ($i = 0; $i < 100; $i++)
	{
 	Order::create(array(
    'order_id' => $faker->numberBetween($min = 10000000, $max = 99999999),
    'product_id' => $faker->numberBetween($min = 10000000, $max = 99999999),
    'user_id' => $faker->numberBetween($min = 10000000, $max = 99999999),
    'quantity' => $faker->numberBetween($min = 1, $max = 10),
    'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 1, $max = 9999)
 	 ));
	}

		//$this->call('AccountsTableSeeder');
	}

}
