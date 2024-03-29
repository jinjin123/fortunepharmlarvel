<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('AccountsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('ImagesTableSeeder');
		$this->call('InvoicesTableSeeder');
		$this->call('OrdersTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('UserTableSeeder');
		
	}

}
