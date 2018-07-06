<?php

/**
** Basic Routes for a RESTful service:
**
** Route::get($uri, $callback);
** Route::post($uri, $callback);
** Route::put($uri, $callback);
** Route::delete($uri, $callback);
**
**/

//use Illuminate\Http\Request;
//
//Route::middleware('auth:api')->get('/user', function (Request $request)
//{
//    return $request->user();
//});

Route::post('v1/register',                 'Auth\RegisterController@register');
Route::post('v1/login',                    'Auth\LoginController@login');
Route::post('v1/logout',                   'Auth\LoginController@logout');

Route::get('v1/countries',                 'Countries@index');
Route::get('v1/countries/{country}',       'Countries@show');
Route::get('v1/countries/{country}/teams', 'Teams@index');
Route::get('v1/countries/teams/{team}',    'Teams@show');

Route::group(['middleware' => 'auth:api'], function()
{

    Route::post(  'v1/countries',           'Countries@store');
    Route::put(   'v1/countries/{country}', 'Countries@update');
    Route::delete('v1/countries/{country}', 'Countries@delete');

    //Route::post(  'v1/countries/{country}/teams',        'Teams@store');
    //Route::put(   'v1/countries/{country}/teams/{team}', 'Teams@update');
    //Route::delete('v1/countries/{country}/teams/{team}', 'Teams@delete');
});
