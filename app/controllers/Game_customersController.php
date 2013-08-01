<?php

class Game_customersController extends BaseController {

    /**
     * Game_customer Repository
     *
     * @var Game_customer
     */
    protected $game_customer;

    public function __construct(Game_customer $game_customer)
    {
        $this->game_customer = $game_customer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $game_customers = $this->game_customer->all();

        return View::make('game_customers.index', compact('game_customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('game_customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Game_customer::$rules);

        if ($validation->passes())
        {
            $this->game_customer->create($input);

            return Redirect::route('game_customers.index');
        }

        return Redirect::route('game_customers.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $game_customer = $this->game_customer->findOrFail($id);

        return View::make('game_customers.show', compact('game_customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $game_customer = $this->game_customer->find($id);

        if (is_null($game_customer))
        {
            return Redirect::route('game_customers.index');
        }

        return View::make('game_customers.edit', compact('game_customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Game_customer::$rules);

        if ($validation->passes())
        {
            $game_customer = $this->game_customer->find($id);
            $game_customer->update($input);

            return Redirect::route('game_customers.show', $id);
        }

        return Redirect::route('game_customers.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->game_customer->find($id)->delete();

        return Redirect::route('game_customers.index');
    }

}