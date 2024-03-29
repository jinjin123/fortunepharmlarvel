<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create("orders", function($table)
    {
      $table->engine = "InnoDB";
      
      $table->increments("id");
	  $table->integer("order_id");
	  $table->integer("product_id");
	  $table->integer("account_id");
	  $table->integer("user_id");
	  $table->integer("quantity");
	  $table->float("price");
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
		Schema::drop('orders');
	}

}
