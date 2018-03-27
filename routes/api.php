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

Route::get('v1/heroes', 'Heroes@index');
Route::get('v1/heroes/{hero}', 'Heroes@show');
Route::post('v1/heroes','Heroes@store');
Route::put('v1/heroes/{hero}','Heroes@update');
Route::delete('v1/heroes/{hero}', 'Heroes@delete');