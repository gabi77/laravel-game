<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('game_customers', function(Blueprint $table)
		{
			$table->increments('game_customers_id');
			$table->string('game_customers_email');
			$table->string('game_customers_gender');
			$table->string('game_customers_lastname',45);
			$table->string('game_customers_firstname',45);
			$table->text('game_customers_address');
			$table->string('game_customers_codepostal',7);
			$table->string('game_customers_city',45);
			$table->integer('game_customers_country');
			$table->string('game_customers_accepted',45);
			$table->string('game_customers_action');
			$table->date('game_customers_dob');
			$table->integer('game_game_id');
			$table->timestamps();
			$table->index('game_customers_email');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('game_customers');
	}

}
