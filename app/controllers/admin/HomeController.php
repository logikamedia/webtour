<?php

namespace App\Controllers\Admin;

class HomeController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		return \View::make('admin.home');
	}
        
        public function getDashboard()
	{
		return \View::make('admin.dashboard');
	}
	
	public function getLogin(){
		return \View::make('admin.login');	
	}

}
