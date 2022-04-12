<?php

namespace App\Http\Controllers;

use App\Models\UserDiary;
use App\Http\Requests\StoreUserDiaryRequest;
use App\Http\Requests\UpdateUserDiaryRequest;

class UserDiaryController extends Controller
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
     * @param  \App\Http\Requests\StoreUserDiaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserDiaryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserDiary  $userDiary
     * @return \Illuminate\Http\Response
     */
    public function show(UserDiary $userDiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserDiary  $userDiary
     * @return \Illuminate\Http\Response
     */
    public function edit(UserDiary $userDiary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserDiaryRequest  $request
     * @param  \App\Models\UserDiary  $userDiary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserDiaryRequest $request, UserDiary $userDiary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserDiary  $userDiary
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserDiary $userDiary)
    {
        //
    }
}
