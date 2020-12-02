<?php

use Illuminate\Database\Migrations\Migration;

class CreateBodiesTable extends Migration {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bodies', function($table)
		{
			$table->increments('id');
			$table->string('txt_en');
			$table->string('txt_ch');
		
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
		Schema::drop('bodies');
	}

}