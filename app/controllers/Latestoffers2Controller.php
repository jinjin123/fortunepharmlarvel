<?php

class Latestoffers2Controller extends BaseController {

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
		

		
		//Latest Offers
		if($lang=='eng'){
	
		return View::make('latest-offers2')
					
						 ->with('lang', 'eng');
						 
			
		}else if($lang=='cht'){
			
			return View::make('latest-offers2')
				
						 ->with('lang', 'cht');
						 
		}else{
			
			return View::make('latest-offers2')
				
						 ->with('lang', 'chs');
						 
			}
					
	
	
		}
	
	
}
