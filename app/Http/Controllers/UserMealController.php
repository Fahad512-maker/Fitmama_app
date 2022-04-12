<?php

namespace App\Http\Controllers;

use App\Models\UserMeal;
use App\Http\Requests\StoreUserMealRequest;
use App\Http\Requests\UpdateUserMealRequest;

class UserMealController extends Controller
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
     * @param  \App\Http\Requests\StoreUserMealRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserMealRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserMeal  $userMeal
     * @return \Illuminate\Http\Response
     */
    public function show(UserMeal $userMeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserMeal  $userMeal
     * @return \Illuminate\Http\Response
     */
    public function edit(UserMeal $userMeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserMealRequest  $request
     * @param  \App\Models\UserMeal  $userMeal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserMealRequest $request, UserMeal $userMeal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserMeal  $userMeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserMeal $userMeal)
    {
        //
    }
}
