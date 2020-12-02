<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("accounts", function($table)
    {
      $table->engine = "InnoDB";
      
      $table->increments("id");
      $table->string("username");
	  $table->string("password");
	  $table->string("email");
 	  $table->integer("user_id");
      $table->dateTime("created_at");
      $table->dateTime("updated_at");
      $table->dateTime("deleted_at");
	  $table->string('remember_token');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::drop('accounts');
	}

}
