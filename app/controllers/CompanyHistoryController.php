<?php

class CompanyHistoryController extends BaseController {

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
		
		$historyintros=Historyintro::all();
		$histories=Companyhistory::all();
	
		$hisList = json_encode($histories);
		
		
		//Company History
		if($lang=='eng'){
	
		return View::make('company-history')
						 ->with('lang', 'eng')
						 ->with('historyintros', $historyintros)
						 ->with('hisList', $hisList);
						 
		}else if($lang=='cht'){
			
			return View::make('company-history')
						 ->with('lang', 'cht')
						 ->with('historyintros', $historyintros)
						->with('hisList', $hisList);
						 
		}else{
			
			return View::make('company-history')
						 ->with('lang', 'chs')
						 ->with('historyintros', $historyintros)
						->with('hisList', $hisList);
						 
			}
					
	
	
		}
	
	
}
