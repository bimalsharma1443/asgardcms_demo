<?php namespace Modules\Mymodule\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class MyModuleController extends Controller {
	
	public function index()
	{
		return view('mymodule::index');
	}
	
}