<?php

use Illuminate\Routing\Router;
/** @var Router $router */

Route::group(['prefix' => '/newmodule'], function()
{
	Route::get('module', 'NewModuleController@index');	
	//Route::get('/module', 'NewModuleController@index');
});
