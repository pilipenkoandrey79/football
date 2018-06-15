<?php

namespace App\Http\Controllers;

use App\Hero;
use Illuminate\Http\Request;

class Heroes extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Hero::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hero = new Hero();
        $hero->id = $request->input('id');
        $hero->name = $request->input('name');
        $hero->save();

        return response()->json($hero, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hero  $hero
     * @return Hero
     */
    public function show(Hero $hero)
    {
        return $hero;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $hero = Hero::find($hero->id);
        $hero->name = $request->input('name');
        $hero->save();

        return response()->json($hero, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function delete(Hero $hero)
    {
        $hero = Hero::find($hero->id);
        $hero->delete();

        return response()->json(null, 204);
    }
}
