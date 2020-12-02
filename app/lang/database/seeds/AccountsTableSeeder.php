<?php

class AccountsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
	DB::table('accounts')->truncate();
	
	$faker = Faker\Factory::create();
 
	for ($i = 0; $i < 100; $i++)
	{
 	 $account = Account::create(array(
    'username' => $faker->userName,
    'user_id' => $faker->randomDigitNotNull,
    'email' => $faker->email,
    'password' => $faker->word
 	 ));
	}

		//$this->call('AccountsTableSeeder');
	}

}
