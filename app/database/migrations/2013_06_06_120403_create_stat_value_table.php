<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatValueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stat_value', function(Blueprint $table)
		{
			$table->increments('stat_value_id');
			$table->integer('stat_stat_id');
			$table->string('stat_value_varchar',45);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stat_value');
	}

}
