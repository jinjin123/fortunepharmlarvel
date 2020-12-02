<?php

use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('url');
			$table->string('icon');
			$table->integer('menu_id');
			$table->integer('page_id');
			$table->boolean('sub_menu');
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
		Schema::drop('menus');
	}

}