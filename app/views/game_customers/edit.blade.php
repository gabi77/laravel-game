@extends('layouts.scaffold')

@section('main')

<h1>Edit Game_customer</h1>
{{ Form::model($game_customer, array('method' => 'PATCH', 'route' => array('game_customers.update', $game_customer->id))) }}
    <ul>
        <li>
            {{ Form::label('game_customers_gender', 'Game_customers_gender:') }}
            {{ Form::text('game_customers_gender') }}
        </li>

        <li>
            {{ Form::label('game_customers_lastname', 'Game_customers_lastname:') }}
            {{ Form::text('game_customers_lastname') }}
        </li>

        <li>
            {{ Form::label('game_customers_firstname', 'Game_customers_firstname:') }}
            {{ Form::text('game_customers_firstname') }}
        </li>

        <li>
            {{ Form::label('game_customers_email', 'Game_customers_email:') }}
            {{ Form::text('game_customers_email') }}
        </li>

        <li>
            {{ Form::label('game_customers_address', 'Game_customers_address:') }}
            {{ Form::textarea('game_customers_address') }}
        </li>

        <li>
            {{ Form::label('game_customers_codepostal', 'Game_customers_codepostal:') }}
            {{ Form::text('game_customers_codepostal') }}
        </li>

        <li>
            {{ Form::label('game_customers_city', 'Game_customers_city:') }}
            {{ Form::text('game_customers_city') }}
        </li>

        <li>
            {{ Form::label('game_customers_accepted', 'Game_customers_accepted:') }}
            {{ Form::text('game_customers_accepted') }}
        </li>

        <li>
            {{ Form::label('game_customers_action', 'Game_customers_action:') }}
            {{ Form::text('game_customers_action') }}
        </li>

        <li>
            {{ Form::label('game_customers_dob', 'Game_customers_dob:') }}
            {{ Form::text('game_customers_dob') }}
        </li>

        <li>
            {{ Form::label('game_game_id', 'Game_game_id:') }}
            {{ Form::input('number', 'game_game_id') }}
        </li>

        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('game_customers.show', 'Cancel', $game_customer->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop