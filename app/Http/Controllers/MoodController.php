<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use App\Http\Requests\StoreMoodRequest;
use App\Http\Requests\UpdateMoodRequest;

class MoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moods = Mood::active()->get();
        return view('admin.moods.index', compact('moods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.moods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMoodRequest $request)
    {
        Mood::create($request->validated());
        return redirect(route('admin.moods.index'))->withSuccess("Mood has been created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\Response
     */
    public function show(Mood $mood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\Response
     */
    public function edit(Mood $mood)
    {
        return view('admin.moods.edit', compact('mood'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMoodRequest  $request
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMoodRequest $request, Mood $mood)
    {
        $mood->update($request->validated());
        return redirect(route('admin.moods.index'))->withSuccess("Mood has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mood $mood)
    {
        //
    }
}
