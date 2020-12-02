<?php

class HealthTipsController extends BaseController {

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
		//Health tips
		
		//$healthtipones=Healthtipone::all();
		$healthtiponep1s=Healthtiponep1::all();
		$healthtiponep2s=Healthtiponep2::all();
		$healthtiponep3s=Healthtiponep3::all();
	
		if($lang=='eng'){
		//Static variable			
		$titles=['Detail','Coughing','Runny nose','Nasal congestion','Headache','Sore throat','Fever','Body aches and pains'];
		

		return View::make('health-tips')
						 ->with('titles', $titles)
						  ->with('healthtiponep1s', $healthtiponep1s)
						    ->with('healthtiponep2s', $healthtiponep2s)
							  ->with('healthtiponep3s', $healthtiponep3s)
						 ->with('lang', 'eng');
					
			
		}else if($lang=='cht'){
		//Static variable			
		$titles=['詳情','咳嗽','流鼻水','鼻塞','頭痛','喉嚨痛','發燒','肌肉疼痛'];
					
		return View::make('health-tips')
		 				->with('titles', $titles)
							  ->with('healthtiponep1s', $healthtiponep1s)
						    ->with('healthtiponep2s', $healthtiponep2s)
							  ->with('healthtiponep3s', $healthtiponep3s)
						 ->with('lang', 'cht');
		}else{
		//Static variable			
		$titles=['详情','咳嗽','流鼻水','鼻塞','头痛','喉咙痛','发烧','肌肉疼痛'];		
	
	
		return View::make('health-tips')
			 			 ->with('titles', $titles)
							  ->with('healthtiponep1s', $healthtiponep1s)
						    ->with('healthtiponep2s', $healthtiponep2s)
							  ->with('healthtiponep3s', $healthtiponep3s)
						 ->with('lang', 'chs');
						 
						 
		}
					
	
	
		}
	
	
}
