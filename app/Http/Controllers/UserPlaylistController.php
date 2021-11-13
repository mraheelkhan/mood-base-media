<?php

namespace App\Http\Controllers;

use App\Models\UserPlaylist;
use App\Http\Requests\StoreUserPlaylistRequest;
use App\Http\Requests\UpdateUserPlaylistRequest;

class UserPlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Http\Requests\StoreUserPlaylistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPlaylistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPlaylist  $userPlaylist
     * @return \Illuminate\Http\Response
     */
    public function show(UserPlaylist $userPlaylist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPlaylist  $userPlaylist
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPlaylist $userPlaylist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPlaylistRequest  $request
     * @param  \App\Models\UserPlaylist  $userPlaylist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPlaylistRequest $request, UserPlaylist $userPlaylist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPlaylist  $userPlaylist
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPlaylist $userPlaylist)
    {
        //
    }
}
