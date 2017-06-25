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
        return view('index', ['allMeals' => meals::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //Returns the create.blade.php in the views folder
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
    //get() first argument is the input name
        $newPost ->name = $request->get('inputName');
        $newPost ->save();

    //Redirects to controller method within the Meals controller
        return redirect(route('Meals.show'));
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Meals $id)
    {
        $meals = meals::find($id);

        return view('Meals.index', ['allMeals' => $meals]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Meals $id)
    {
        //find Id
         $findId = meals::find($id);
        return view('edit', ['allMeals' => $findId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meals $id)
    {
    //Look for the id in the database
        $thisMeal       = meals::find($id);
    //Get the value of the name in the edit.blade.php page
        $thisMeal->name = $request->get('name');
        $thisMeal->save();

        return redirect( route( 'Meals.index') );
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Meals $meals)
    {
        //
    }
}
