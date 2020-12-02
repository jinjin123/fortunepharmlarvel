<?php

class AdvertisementsController extends BaseController {

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


	public function Sorting($lang,$cursor_yr)
	{
		
	
		$advertisments=Advertisment::all();
		$introadvertisment=Introadvertisment::all();
		$page_num=$cursor_yr;
	
		
		foreach ($advertisments as $advertisment) { 
		$yrs[]=substr($advertisment->date,0,4);
		}
		
		rsort($yrs);
		$yrs=array_values(array_unique($yrs));
		
		$max_page_num=intval(sizeof($yrs));
		
		$advertisment_cursor_yrs=DB::table('advertisments')->where('date','LIKE','%'.$yrs[$cursor_yr].'%')->orderBy('date', 'desc')->get();
		
		$amount_of_page=sizeof($yrs);
		
		//Advertisments
		if($lang=='eng'){
			
		$skip="Skip";
		$watch="Watch";
	
		return View::make('advertisements')
		 				 ->with('cursor_yr', $cursor_yr)
						 ->with('page_num', $page_num)
						 ->with('max_page_num', $max_page_num)
						 ->with('advertisment_cursor_yrs',  $advertisment_cursor_yrs)
						 ->with('introadvertisment',  $introadvertisment)
						 ->with('yrs', $yrs)
						  ->with('amount_of_page', $amount_of_page)
						 ->with('skip', $skip)
						 ->with('watch', $watch)
						 ->with('lang', 'eng');
						 
			
		}else if($lang=='cht'){
			
	    $skip="跳至";
		$watch="觀看";
			
		return View::make('advertisements')
						 ->with('cursor_yr', $cursor_yr)
						  ->with('page_num', $page_num)
						  ->with('max_page_num', $max_page_num)
						 ->with('advertisment_cursor_yrs',  $advertisment_cursor_yrs)
						 ->with('introadvertisment',  $introadvertisment)
						  ->with('yrs', $yrs)
						    ->with('amount_of_page', $amount_of_page)
						 ->with('skip', $skip)
						 ->with('watch', $watch)
						 ->with('lang', 'cht');
						 
		}else{
			
		$skip="跳至";	
		$watch="观看";
			
		return View::make('advertisements')
					 	 ->with('cursor_yr', $cursor_yr)
						  ->with('page_num', $page_num)
						  ->with('max_page_num', $max_page_num)
						 ->with('advertisment_cursor_yrs',  $advertisment_cursor_yrs)
						  ->with('introadvertisment',  $introadvertisment)			  
						 ->with('yrs', $yrs)
						   ->with('amount_of_page', $amount_of_page)
						  ->with('skip', $skip)
						  ->with('watch', $watch)
						 ->with('lang', 'chs');
						 
			}
					
	
	
		}
	
	
}
