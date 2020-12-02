<?php

class HealthTipsAllergyController extends BaseController {

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
		
	//Health tips allergy
		

		$healthtipfivep1s=Healthtipfivep1::all();
		$healthtipfivep2s=Healthtipfivep2::all();
		$healthtipfivep3s=Healthtipfivep3::all();
		$healthtipfivep4s=Healthtipfivep4::all();
		
		if($lang=='eng'){
		
		//Static variable			
		$titles=['Detail','Bathroom','Living room','Bedroom','To reduce mold growth','Properly ventilated','Maintain home hygiene','Clean frequently','Bathe pets frequently','Choose low-pile carpets','Keep pets off upholstered furniture','Wash sheets and blankets','Reduce clutter and dust build up','Mattresses and Pillows'];	

		return View::make('health-tips-allergy')
			 			 ->with('titles', $titles)
						  ->with('healthtipfivep1s', $healthtipfivep1s)
						   ->with('healthtipfivep2s', $healthtipfivep2s)
						    ->with('healthtipfivep3s', $healthtipfivep3s)
							 ->with('healthtipfivep4s', $healthtipfivep4s)
						 ->with('lang', 'eng');
					
			
		}else if($lang=='cht'){
					
	    //Static variable			
		$titles=['詳情','浴室','客廳','睡房','減少霉菌滋長','保持室內通風','減少室內塵埃','定時清洗','經常幫動物梳洗','選用短毛地毯','勿讓寵物走上傢俱','清洗床單和被單','清潔雜物','床單及枕頭套'];	
					
		return View::make('health-tips-allergy')
						 ->with('titles', $titles)
						   ->with('healthtipfivep1s', $healthtipfivep1s)
						   ->with('healthtipfivep2s', $healthtipfivep2s)
						    ->with('healthtipfivep3s', $healthtipfivep3s)
							 ->with('healthtipfivep4s', $healthtipfivep4s)
					
						 ->with('lang', 'cht');
		}else{
			
		//Static variable			
		$titles=['详情','浴室','客厅','睡房','减少霉菌滋长','保持室内通风','减少室内尘埃','定时清洗','经常帮动物梳洗','选用短​​毛地毯','勿让宠物走上家具','清洗床单和被单','清洁杂物','床垫及枕头'];		
	
		return View::make('health-tips-allergy')
						 ->with('titles', $titles)
						   ->with('healthtipfivep1s', $healthtipfivep1s)
						   ->with('healthtipfivep2s', $healthtipfivep2s)
						    ->with('healthtipfivep3s', $healthtipfivep3s)
							 ->with('healthtipfivep4s', $healthtipfivep4s)
			
						 ->with('lang', 'chs');
						 
			}
					
	
	
		}
	
	
}
