<?php

class HealthTipsChildrenController extends BaseController {

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
		//Health tips-children

		//$healthtiptwos=Healthtiptwo::all();
		$healthtiptwop1s=Healthtiptwop1::all();
		$healthtiptwop2s=Healthtiptwop2::all();
		$healthtiptwop3s=Healthtiptwop3::all();

		if($lang=='eng'){
		//Static variable			
		$titles=['Detail','Runny nose','Nasal congestion','Sneezing','Coughing','Sore throat','Fever','Loss of appetite'];
			
		return View::make('health-tips-children')
		 				->with('titles', $titles)
		 				->with('healthtiptwop1s', $healthtiptwop1s)
							->with('healthtiptwop2s', $healthtiptwop2s)
								->with('healthtiptwop3s', $healthtiptwop3s)
						->with('lang', 'eng');
					
			
		}else if($lang=='cht'){
					
		//Static variable			
		$titles=['詳情','流鼻水','鼻塞','打噴嚏','咳嗽','喉嚨痛','輕微發燒','食慾減退'];
					
	return View::make('health-tips-children')
	 					  ->with('titles', $titles)
						  	->with('healthtiptwop1s', $healthtiptwop1s)
							->with('healthtiptwop2s', $healthtiptwop2s)
								->with('healthtiptwop3s', $healthtiptwop3s)
						 ->with('lang', 'cht');
		}else{
			
		//Static variable			
		$titles=['详情','流鼻水','鼻塞','打喷嚏','咳嗽','喉咙痛','轻微发烧','食欲减退'];	
	
	return View::make('health-tips-children')
	 					 ->with('titles', $titles)
						 	->with('healthtiptwop1s', $healthtiptwop1s)
							->with('healthtiptwop2s', $healthtiptwop2s)
							->with('healthtiptwop3s', $healthtiptwop3s)
						 ->with('lang', 'chs');
						 
			}
					
	
	
		}
	
	
}
