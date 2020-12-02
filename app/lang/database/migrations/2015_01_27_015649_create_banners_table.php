<?php

use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banners', function($table)
		{
			$table->increments('id');
			$table->string('style');
			$table->string('txt1');
			$table->string('txt2');
			$table->string('txt3');
			$table->string('video_link');
			$table->string('frame');
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
		Schema::drop('banners');
	}

}