<?php

namespace App\Http\Controllers;

use App\Models\ChatScheduleMessage;
use App\Http\Requests\StoreChatScheduleMessageRequest;
use App\Http\Requests\UpdateChatScheduleMessageRequest;

class ChatScheduleMessageController extends Controller
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
     * @param  \App\Http\Requests\StoreChatScheduleMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChatScheduleMessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChatScheduleMessage  $chatScheduleMessage
     * @return \Illuminate\Http\Response
     */
    public function show(ChatScheduleMessage $chatScheduleMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChatScheduleMessage  $chatScheduleMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatScheduleMessage $chatScheduleMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChatScheduleMessageRequest  $request
     * @param  \App\Models\ChatScheduleMessage  $chatScheduleMessage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChatScheduleMessageRequest $request, ChatScheduleMessage $chatScheduleMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChatScheduleMessage  $chatScheduleMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatScheduleMessage $chatScheduleMessage)
    {
        //
    }
}
