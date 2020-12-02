<?php

class HealthTipsPainController extends BaseController {

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
		//Health tips-Pain
		
		$healthtipthrees=Healthtipthree::all();
		
		if($lang=='eng'){
		
		//Static variable			
		$titles=['Detail','Tension headache','Migraine headache','Sinus headache','','Vascular headache','Cluster headache'];	

		return View::make('health-tips-pain')
			 			->with('lang', 'eng')
						->with('titles', $titles)
		 				->with('healthtipthrees', $healthtipthrees)
					    ;
					
			
		}else if($lang=='cht'){
					
		//Static variable			
		$titles=['詳情','壓力性頭痛','偏頭痛','鼻竇炎引發頭痛','','血管性頭痛','叢集性頭痛'];		
			
						return View::make('health-tips-pain')
						 ->with('lang', 'cht')
						 ->with('titles', $titles)
		 				 ->with('healthtipthrees', $healthtipthrees)
						 ;
		}else{
			  
		//Static variable			
		$titles=['详情','压力性头痛','偏头痛','鼻窦炎引发头痛','','血管性头痛','丛集性头痛'];		
	
						return View::make('health-tips-pain')
	 					 ->with('lang', 'chs')
						 ->with('titles', $titles)
		 				 ->with('healthtipthrees', $healthtipthrees)
						;
						 
			}
					
	
	
		}
	
	
}
