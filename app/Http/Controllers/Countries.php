<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class Countries extends Controller
{
    /** @var array */
    protected $rules = [
        'name' => 'required|string|max:255',
        'code' => 'required|string|max:2|min:2|unique:countries'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Country::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);
        $country = new Country();
        $country->id = $request->input('id');
        $country->name = $request->input('name');
        $country->code = $request->input('code');
        $country->save();

        return response()->json($country, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country $country
     * @return Country
     */
    public function show(Country $country)
    {
        return $country;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Country             $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $this->validate($request, $this->rules);
        $country = Country::find($country->id);
        $country->name = $request->input('name');
        $country->code = $request->input('code');
        $country->save();

        return response()->json($country, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function delete(Country $country)
    {
        $country = Country::find($country->id);
        $country->delete();

        return response()->json(null, 204);
    }
}
