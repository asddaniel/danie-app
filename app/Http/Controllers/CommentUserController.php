<?php

namespace App\Http\Controllers;

use App\Models\CommentUser;
use App\Http\Requests\StoreCommentUserRequest;
use App\Http\Requests\UpdateCommentUserRequest;

class CommentUserController extends Controller
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
     * @param  \App\Http\Requests\StoreCommentUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommentUser  $commentUser
     * @return \Illuminate\Http\Response
     */
    public function show(CommentUser $commentUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommentUser  $commentUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentUser $commentUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentUserRequest  $request
     * @param  \App\Models\CommentUser  $commentUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentUserRequest $request, CommentUser $commentUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentUser  $commentUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentUser $commentUser)
    {
        //
    }
}
