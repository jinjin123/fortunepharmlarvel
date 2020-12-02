<?php

class InvoicesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
	DB::table('invoices')->truncate();
	
	$faker = Faker\Factory::create();
 
	for ($i = 0; $i < 100; $i++)
	{
 	 Invoice::create(array(
    'order_id' => $faker->numberBetween($min = 10000000, $max = 99999999),
    'invoice_id' => $faker->numberBetween($min = 10000000, $max = 99999999),
    'amount' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 9999)
 	 ));
	}

		//$this->call('AccountsTableSeeder');
	}

}
