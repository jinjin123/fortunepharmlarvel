<?php

class HealthTipsCoughController extends BaseController {

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
		
		//Health tips Cough
		
		$healthtipfours=Healthtipfour::all();
		
		if($lang=='eng'){
		
		//Static variable			
		$titles=['Detail'];

		return View::make('health-tips-cough')
						->with('titles', $titles)
						  ->with('healthtipfours', $healthtipfours)
						 ->with('lang', 'eng');
					
			
		}else if($lang=='cht'){
					
		//Static variable			
		$titles=['詳情'];
					
	return View::make('health-tips-cough')
						  ->with('titles', $titles)
						  ->with('healthtipfours', $healthtipfours)
						 ->with('lang', 'cht');
		}else{
			
		//Static variable			
		$titles=['详情'];
	
	return View::make('health-tips-cough')
						 ->with('titles', $titles)
						  ->with('healthtipfours', $healthtipfours)
						 ->with('lang', 'chs');
						 
			}
					
	
	
		}
	
	
}
