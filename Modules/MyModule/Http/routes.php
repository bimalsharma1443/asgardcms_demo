<?php

Route::group(['prefix' => 'mymodule', 'namespace' => 'Modules\MyModule\Http\Controllers'], function()
{
	Route::get('/', 'MyModuleController@index');
});