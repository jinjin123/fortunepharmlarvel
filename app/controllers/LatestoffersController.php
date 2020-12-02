<?php

class LatestoffersController extends BaseController {

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
		
		$offers=Offer::all();
		
		if(empty($offers[0])){
		return View::make('latest-offers2')
						 ->with('lang', $lang);
		}
		
		//Latest Offers
		if($lang=='eng'){
			
			$more="More";
	
		return View::make('latest-offers')
						->with('offers', $offers)
							->with('more', $more)
						 ->with('lang', 'eng');
						 
			
		}else if($lang=='cht'){
			
			 $more="顯示更多";
			
			return View::make('latest-offers')
						->with('offers', $offers)
								->with('more', $more)
						 ->with('lang', 'cht');
						 
		}else{
			
			$more="显示更多";
			
			return View::make('latest-offers')
						->with('offers', $offers)
								->with('more', $more)
						 ->with('lang', 'chs');
						 
			}
					
	
	
		}
	
	
}
