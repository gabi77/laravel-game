@extends('layouts.scaffold')

@section('main')

<h1>All Game_customers</h1>

<p>{{ link_to_route('game_customers.create', 'Add new game_customer') }}</p>

@if ($game_customers->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Game_customers_gender</th>
				<th>Game_customers_lastname</th>
				<th>Game_customers_firstname</th>
				<th>Game_customers_email</th>
				<th>Game_customers_address</th>
				<th>Game_customers_codepostal</th>
				<th>Game_customers_city</th>
				<th>Game_customers_accepted</th>
				<th>Game_customers_action</th>
				<th>Game_customers_dob</th>
				<th>Game_game_id</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($game_customers as $game_customer)
                <tr>
                    <td>{{{ $game_customer->game_customers_gender }}}</td>
					<td>{{{ $game_customer->game_customers_lastname }}}</td>
					<td>{{{ $game_customer->game_customers_firstname }}}</td>
					<td>{{{ $game_customer->game_customers_email }}}</td>
					<td>{{{ $game_customer->game_customers_address }}}</td>
					<td>{{{ $game_customer->game_customers_codepostal }}}</td>
					<td>{{{ $game_customer->game_customers_city }}}</td>
					<td>{{{ $game_customer->game_customers_accepted }}}</td>
					<td>{{{ $game_customer->game_customers_action }}}</td>
					<td>{{{ $game_customer->game_customers_dob }}}</td>
					<td>{{{ $game_customer->game_game_id }}}</td>
                    <td>{{ link_to_route('game_customers.edit', 'Edit', array($game_customer->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('game_customers.destroy', $game_customer->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no game_customers
@endif

@stop