<?php

namespace App\Http\Controllers;

use App\Country;
use App\Team;
use Illuminate\Http\Request;

class Teams extends Controller
{
    /**
     * @param \App\Country $country
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index(Country $country)
    {
        return Team::where('country_id', $country->id)->get();
    }
}
