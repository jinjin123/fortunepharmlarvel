<?php

class CharityfundController extends BaseController {

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
		
		$charityintros=Charityintro::all();
		$charties=Charityfund::all();
	
		$charList = json_encode($charties);
		
		$pureYears = array();
		foreach($charties as $key => $value){
			$fullDate = explode("-", $value['date']);
			array_push($pureYears, $fullDate[0]);
		}
		arsort($pureYears);
		$pureYears = array_values(array_unique($pureYears));
		
		//Company History
		if($lang=='eng'){
	
		return View::make('charity-fund')
						 ->with('lang', 'eng')
						 ->with('charityintros', $charityintros)
						->with('charList', $charList)
						->with('pureYears', $pureYears)
						->with('pureYearsLength', count($pureYears))
						->with('firstYear', $charityintros[0]->first_year)
						->with('secondYear', $charityintros[0]->second_year);
						 
		}else if($lang=='cht'){
			
			return View::make('charity-fund')
						 ->with('lang', 'cht')
								 ->with('charityintros', $charityintros)
						->with('charList', $charList)
						->with('pureYears', $pureYears)
						->with('pureYearsLength', count($pureYears))
						->with('firstYear', $charityintros[0]->first_year)
						->with('secondYear', $charityintros[0]->second_year);
						 
		}else{
			
			return View::make('charity-fund')
						 ->with('lang', 'chs')
						->with('charityintros', $charityintros)
						->with('charList', $charList)
						->with('pureYears', $pureYears)
						->with('pureYearsLength', count($pureYears))
						->with('firstYear', $charityintros[0]->first_year)
						->with('secondYear', $charityintros[0]->second_year);
						 
			}
					
	
	
		}
	
	
}
