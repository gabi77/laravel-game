<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGameCustomersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_customers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('game_customers_gender');
			$table->string('game_customers_lastname');
			$table->string('game_customers_firstname');
			$table->string('game_customers_email');
			$table->text('game_customers_address');
			$table->string('game_customers_codepostal');
			$table->string('game_customers_city');
			$table->string('game_customers_accepted');
			$table->string('game_customers_action');
			$table->date('game_customers_dob');
			$table->integer('game_game_id');
			$table->index('game_customers_email');
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
        Schema::drop('customers');
    }

}
