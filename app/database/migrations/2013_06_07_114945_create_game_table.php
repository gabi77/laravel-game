<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('game', function(Blueprint $table)
		{
			$table->increments('game_id');
			$table->string('game_name',255);
			$table->datetime('game_date_start');
			$table->datetime('game_date_finished');
			$table->string('game_segmentation',55);
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
		Schema::drop('game');
	}

}
