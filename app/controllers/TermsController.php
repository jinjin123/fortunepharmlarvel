<?php

class TermsController extends BaseController {

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
		
		$terms=Term::all();
		
		//Terms
		if($lang=='eng'){
	
		return View::make('terms')
						 ->with('lang', 'eng')
						 ->with('terms', $terms);
						 
			
		}else if($lang=='cht'){
			
		return View::make('terms')
						 ->with('lang', 'cht')
						  ->with('terms', $terms);
						 
		}else{
			
		return View::make('terms')
						 ->with('lang', 'chs')
						 ->with('terms', $terms);
						 
			}
					
	
	
		}
	
	
}
