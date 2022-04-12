<?php

namespace App\Http\Controllers;

use App\Models\FoodRecipe;
use App\Http\Requests\StoreFoodRecipeRequest;
use App\Http\Requests\UpdateFoodRecipeRequest;

class FoodRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreFoodRecipeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFoodRecipeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function show(FoodRecipe $foodRecipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodRecipe $foodRecipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFoodRecipeRequest  $request
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFoodRecipeRequest $request, FoodRecipe $foodRecipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodRecipe $foodRecipe)
    {
        //
    }
}
