<?php

namespace App\Http\Controllers;

use App\Models\UserProgressPhotos;
use App\Http\Requests\StoreUserProgressPhotosRequest;
use App\Http\Requests\UpdateUserProgressPhotosRequest;

class UserProgressPhotosController extends Controller
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
     * @param  \App\Http\Requests\StoreUserProgressPhotosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserProgressPhotosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProgressPhotos  $userProgressPhotos
     * @return \Illuminate\Http\Response
     */
    public function show(UserProgressPhotos $userProgressPhotos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProgressPhotos  $userProgressPhotos
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProgressPhotos $userProgressPhotos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserProgressPhotosRequest  $request
     * @param  \App\Models\UserProgressPhotos  $userProgressPhotos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserProgressPhotosRequest $request, UserProgressPhotos $userProgressPhotos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProgressPhotos  $userProgressPhotos
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProgressPhotos $userProgressPhotos)
    {
        //
    }
}
