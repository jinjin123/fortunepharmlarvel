<?php

class ImagesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
	DB::table('Images')->truncate();
	
	$faker = Faker\Factory::create();
 
	for ($i = 0; $i < 10; $i++)
	{
 	 Image::create(array(
 	'url' =>$faker->url,
    'image_id' => $faker->randomDigitNotNull, 
    'product_id' => $faker->randomDigitNotNull,
    'width' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 20),
    'height' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 20)
 	 ));
	}

		//$this->call('AccountsTableSeeder');
	}

}
