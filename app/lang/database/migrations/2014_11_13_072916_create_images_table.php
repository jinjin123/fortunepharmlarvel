<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::create("images", function($table)
    {
      $table->engine = "InnoDB";
      
      $table->increments("id");
	  $table->integer("image_id");
	  $table->integer("product_id");
	  $table->string("url");
	  $table->string("path");
	  $table->integer("width");
	  $table->integer("height");
      $table->dateTime("created_at");
      $table->dateTime("updated_at");
      $table->dateTime("deleted_at");
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('images');
	}

}
