<?php

namespace App\Http\Controllers;

use App\Meals;
use Illuminate\Http\Request;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //Gets everything in the meals table and assigns that to the allMeals variable
        return view('allmeal', ['allMeals' => meals::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        Returns the create.blade.php in the views folder
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //Instantiate the model Meals
        $newPost = new Meals();
    //Get the value of the input with the name attribute = 'name" and save it to the database
        $newPost ->name = $request->get('foobar');
        $newPost ->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function show(Meals $meals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function edit(Meals $meals)
    {
        return view('edit', ['mealId' => meals::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meals $meals)
    {
        $thisMeal       = meals::find( $meals );
        $thisMeal->name = $request->get( 'name' );
        $thisMeal->save();

//        return redirect( route( 'peanutbutters.edit',
//            [ 'id' => $meals, 'saved' => true ] ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meals  $meals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meals $meals)
    {
        //
    }
}
