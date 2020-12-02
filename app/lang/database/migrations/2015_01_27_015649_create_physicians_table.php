<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhysiciansTable extends Migration {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('physicians', function($table)
		{
			$table->increments('id');
			$table->string('region');
			$table->string('name');
			$table->string('address');
			$table->string('contact');
			$table->integer('link');
			$table->boolean('publish');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('physicians');
	}

}