<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert([
                'username'   => 'admin',
                'email'      => 'admin@teqapps.com',
                'password'   => Hash::make('admin1234'),
                'first_name' => 'admin',
                'last_name'  => 'admin',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::delete('users');
	}

}
