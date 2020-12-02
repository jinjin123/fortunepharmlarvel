<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create("products", function($table)
    {
      $table->engine = "InnoDB";
      
      $table->increments("id");
      $table->string("name");
	  $table->float("cost");
	  $table->float("price");
	  $table->integer("quantity");
	  $table->integer("product_id");
	  $table->integer("category_id");
	  $table->integer("image_id");
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
	    Schema::drop('products');
	}

}
