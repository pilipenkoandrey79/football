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
 
Route::get('v1/employees', 'Employees@index');
Route::get('v1/employees/{employee}', 'Employees@show');
Route::post('v1/employees','Employees@store');
Route::put('v1/employees/{employee}','Employees@update');
Route::delete('v1/employees/{employee}', 'Employees@delete');