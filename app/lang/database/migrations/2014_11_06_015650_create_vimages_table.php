<?php

use Illuminate\Database\Migrations\Migration;

class CreateVimagesTable extends Migration {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vimages', function($table)
		{
			$table->increments('id');
			$table->integer('image_id');
			$table->string('url');
			$table->string('remark');
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
		Schema::drop('vimages');
	}

}