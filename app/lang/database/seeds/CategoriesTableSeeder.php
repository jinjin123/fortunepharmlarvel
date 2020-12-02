<?php

class CategoriesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
	DB::table('categories')->truncate();
	
	$faker = Faker\Factory::create();
 
	for ($i = 0; $i < 10; $i++)
	{
 	 Category::create(array(
    'name' => $faker->word,
 	 ));
	}

		//$this->call('AccountsTableSeeder');
	}

}
