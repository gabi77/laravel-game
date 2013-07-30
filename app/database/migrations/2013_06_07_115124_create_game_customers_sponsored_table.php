<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameCustomersSponsoredTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('game_customers_sponsored', function(Blueprint $table)
		{
			$table->increments('game_customers_sponsored_id');
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
		Schema::drop('game_customers_sponsored');
	}

}
