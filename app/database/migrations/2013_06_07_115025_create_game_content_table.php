<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameContentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('game_content', function(Blueprint $table)
		{
			$table->increments('game_content_id');
			$table->integer('game_game_id');
			$table->string('game_content_name',255);
			$table->text('game_content_text');
			$table->string('game_content_status',2);
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
		Schema::drop('game_content');
	}

}
