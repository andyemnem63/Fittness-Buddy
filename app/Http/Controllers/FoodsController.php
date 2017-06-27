<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meals;
use App\Food;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allMeal = meals::all();
        return view('food', ['allMeals' => $allMeal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $newPost = new Food();
        $userId = $request->get('id');
        //Get the value of the input with the name attribute = 'name" and save it to the database
        //get() first argument is the input name
        $newPost ->food_name= $request->get('food');
        $newPost ->protein= $request->get('protein');
        $newPost ->carbs = $request->get('carbs');
        $newPost ->fat = $request->get('fat');
        $newPost ->food_id = $request->get('id');
        $newPost ->save();

        return redirect("/Food/$userId");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allFood = Food::all();
        $allMeal = meals::all();
        return view('food', ['userId' => $id])->with(['allFood' => $allFood])->with(['allMeal' => $allMeal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
