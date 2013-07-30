<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZfUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zf_user', function(Blueprint $table)
		{
			$table->increments('user_id');
			$table->string('user_email',255);
			$table->string('user_firstname',45);
			$table->string('user_lastname',45);
			$table->string('user_password',255);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('zf_user');
	}

}
