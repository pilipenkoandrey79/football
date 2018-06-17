<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class Countries extends Controller
{
    private $rules = [
        'name' => 'required|regex:^[^0-9!#.$]$'
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
        $validData = $request->validate($this->rules);
        $country = new Country();
        $country->id = $validData->input('id');
        $country->name = $validData->input('name');
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
        $validData = $request->validate($this->rules);
        $model = Country::find($country->id);
        $model->name = $validData->input('name');
        $model->save();

        return response()->json($model, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function delete(Country $country)
    {
        $model = Country::find($country->id);
        $model->delete();

        return response()->json(null, 204);
    }
}
