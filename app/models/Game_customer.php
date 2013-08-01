<?php

class Game_customer extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'game_customers_city' => '',
		'game_customers_email' => '',
		'game_customers_address' => '',
		'game_customers_action' => '',
		'game_customers_dob' => '',
		'game_game_id' => ''
	);
}