<?php

class NewsController extends BaseController {

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


	

	
	public function Sorting($lang,$page_num)
	{
		
		$skip_item=$page_num*10;
		
		$current_year=date("Y");
		$yrs=[];
		$newposts_all=Newpost::all();
		$newposts_length=sizeof($newposts_all);
		$max_page_num=intval($newposts_length/10);
		
		
		$newposts=DB::table('newposts')->orderBy('date', 'desc')->skip($skip_item)->take(10)->get();
		
		
		foreach ($newposts as $newpost){
		$yrs[]=substr($newpost->date,0,4);
		}

	 	
		
		//News
		if($lang=='eng'){
				
		//Static Variable
		$titles=['Year'];		
		$skip="Skip";
		
		
		
		return View::make('news')
		
						 ->with('current_year', $current_year)
						 ->with('newposts', $newposts)
						 ->with('newposts_length', $newposts_length)
						 ->with('yrs', $yrs)
						 ->with('page_num', $page_num)
						 ->with('max_page_num', $max_page_num)
						 ->with('titles', $titles)
						 	  ->with('skip', $skip)
						 ->with('lang', 'eng');
						 
			
		}else if($lang=='cht'){
			
		//Static Variable
		$titles=['年'];		
		$skip="跳至";
		
			return View::make('news')
				 
						 ->with('current_year', $current_year)
						 ->with('newposts', $newposts)
						 ->with('newposts_length', $newposts_length)
						 ->with('yrs', $yrs)
						 ->with('page_num', $page_num)
						 ->with('max_page_num', $max_page_num)
						 ->with('titles', $titles)
						 	  ->with('skip', $skip)
						 ->with('lang', 'cht');
						 
		}else{
			
	    //Static Variable
		$titles=['年'];		
		$skip="跳至";	
			
		return View::make('news')
			 		
						 ->with('current_year', $current_year)
						   ->with('newposts', $newposts)
						 ->with('newposts_length', $newposts_length)
						 ->with('yrs', $yrs)
					 	 ->with('page_num', $page_num)
						 ->with('max_page_num', $max_page_num)
						 ->with('titles', $titles)
						  ->with('skip', $skip)
						 ->with('lang', 'chs');
						 
			}
					
	
	
		}
	
	
}
