<?php

class FactoryIntroController extends BaseController {

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
		$histories=History::all();
		$factoryintros=Factoryintro::all();
	
		$hisList = json_encode($histories);
		
		
		//Company History
		if($lang=='eng'){
	
		return View::make('factory-intro')
						 ->with('lang', 'eng')
						 ->with('hisList', $hisList)
						 ->with('factoryintros', $factoryintros);
						 
		}else if($lang=='cht'){
			
			return View::make('factory-intro')
						 ->with('lang', 'cht')
						->with('hisList', $hisList)
						->with('factoryintros', $factoryintros);
						 
		}else{
			
			return View::make('factory-intro')
						 ->with('lang', 'chs')
						->with('hisList', $hisList)
						->with('factoryintros', $factoryintros);
						 
			}
					
	
	
		}
	
	
}
