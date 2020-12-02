<?php

class PrivacyController extends BaseController {

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


	

	
	public function Sorting($lang)
	{
		$policies=Policy::all();
	
		//Terms
		if($lang=='eng'){
	
		return View::make('privacy')
						 ->with('lang', 'eng')
						  ->with('policies', $policies);
			
		}else if($lang=='cht'){
			
		return View::make('privacy')
						 ->with('lang', 'cht')
						   ->with('policies', $policies);
						 
		}else{
			
		return View::make('privacy')
						 ->with('lang', 'chs')
						   ->with('policies', $policies);
						 
			}
					
	
	
		}
	
	
}
