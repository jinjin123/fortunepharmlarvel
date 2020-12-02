<?php

class ContactusController extends BaseController {

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
		
		$hkcontacts=Hkcontact::all();
		$chinacontacts=Chinacontact::all();
		$jobs=Job::all();
		
		//Contact Us
		if($lang=='eng'){
			
		//Static Variable
		$titles=['Phone','Fax','Email','Website','香港及海外市場','中國市場'];	
			
		return View::make('contact-us')
						 ->with('lang', 'eng')
						 ->with('titles', $titles)
						 ->with('chinacontacts', $chinacontacts)
						 ->with('jobs', $jobs)
						 ->with('hkcontacts', $hkcontacts);
						 
						
						 
			
		}else if($lang=='cht'){
			
		//Static Variable
		$titles=['電話','傳真','電郵','網頁','香港及海外市場','中國市場'];	
			
		return View::make('contact-us')
						 ->with('lang', 'cht')
						 ->with('titles', $titles)
						 ->with('chinacontacts', $chinacontacts)
						 ->with('jobs', $jobs)
						 ->with('hkcontacts', $hkcontacts);
						 
		}else{
			
		//Static Variable
		$titles=['电话','传真','电邮','网页','香港及海外市场','中国市场'];		
			
		return View::make('contact-us')
						 ->with('lang', 'chs')
						 ->with('titles', $titles)
						 ->with('chinacontacts', $chinacontacts)	
						 ->with('jobs', $jobs)  
						 ->with('hkcontacts', $hkcontacts);
						 
			}
					
	
	
		}
	
	
}
