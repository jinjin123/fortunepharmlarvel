<?php

use Illuminate\Database\Migrations\Migration;

class CreateFootersTable extends Migration {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('footers', function($table)
		{
			$table->increments('id');
			$table->string('remark');
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
		Schema::drop('footers');
	}

}