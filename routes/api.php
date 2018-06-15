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

Route::get(   'v1/heroes',        'Heroes@index');
Route::get(   'v1/heroes/{hero}', 'Heroes@show');
Route::post(  'v1/heroes',        'Heroes@store');
Route::put(   'v1/heroes/{hero}', 'Heroes@update');
Route::delete('v1/heroes/{hero}', 'Heroes@delete');

Route::get(   'v1/countries',           'Countries@index');
Route::get(   'v1/countries/{country}', 'Countries@show');
Route::post(  'v1/countries',           'Countries@store');
Route::put(   'v1/countries/{country}', 'Countries@update');
Route::delete('v1/countries/{country}', 'Countries@delete');

Route::get(   'v1/countries/{country}/teams',        'Teams@index');
//Route::get(   'v1/countries/{country}/teams/{team}', 'Teams@show');
//Route::post(  'v1/countries/{country}/teams',        'Teams@store');
//Route::put(   'v1/countries/{country}/teams/{team}', 'Teams@update');
//Route::delete('v1/countries/{country}/teams/{team}', 'Teams@delete');
