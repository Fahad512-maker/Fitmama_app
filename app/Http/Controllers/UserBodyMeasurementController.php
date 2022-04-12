<?php

namespace App\Http\Controllers;

use App\Models\UserBodyMeasurement;
use App\Http\Requests\StoreUserBodyMeasurementRequest;
use App\Http\Requests\UpdateUserBodyMeasurementRequest;

class UserBodyMeasurementController extends Controller
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
     * @param  \App\Http\Requests\StoreUserBodyMeasurementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserBodyMeasurementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserBodyMeasurement  $userBodyMeasurement
     * @return \Illuminate\Http\Response
     */
    public function show(UserBodyMeasurement $userBodyMeasurement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserBodyMeasurement  $userBodyMeasurement
     * @return \Illuminate\Http\Response
     */
    public function edit(UserBodyMeasurement $userBodyMeasurement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserBodyMeasurementRequest  $request
     * @param  \App\Models\UserBodyMeasurement  $userBodyMeasurement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserBodyMeasurementRequest $request, UserBodyMeasurement $userBodyMeasurement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserBodyMeasurement  $userBodyMeasurement
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserBodyMeasurement $userBodyMeasurement)
    {
        //
    }
}
