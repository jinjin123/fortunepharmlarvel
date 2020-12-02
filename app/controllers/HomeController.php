<?php

class HomeController extends BaseController {

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

	//Default
	public function DefaultHome()
	{
	//DB Connection
	$menus=Menu::all();
	$homesliders=Homeslider::all();
	$homebanners=Homebanner::all();
	$videolinks=Homeyoutube::all();

		//Fill "http://" in link
		for ($x=0;$x<3;$x++){
		if($homebanners[$x]->linktype=='ex'){
		if ($homebanners[$x]->link AND substr($homebanners[$x]->link,0,1) != "/" AND substr($homebanners[$x]->link,0,4) != "http"){
		$homebanners[$x]->link="http://".$homebanners[$x]->link;
				}


			 }
		}
		$x=0;
		foreach($homesliders as $homeslider){

		if ($homesliders[$x]->link AND substr($homesliders[$x]->link,0,1) != "/" AND substr($homesliders[$x]->link,0,4) != "http" AND $homeslider->linktype=='ex'){
		$homesliders[$x]->link="http://".$homesliders[$x]->link;
			}
		$x++;
		}


	return View::make('home')
				->with('lang','cht')
				->with('menus',$menus)
				->with('homebanners',$homebanners)
				->with('videolinks',$videolinks)
				->with('homesliders',$homesliders);

	}

	public function otherservices($lang)
	{
		$get = Otherservices::all();

//		$jr = new Otherservices();
//			var_dump($jr->getAuthor());
//		die();

		return View::make('other-services')
				->with('got',$get)
				->with('lang', $lang);
	}


	public function Sorting($lang)
	{


		//Home

		//DB Connection
		$menus=Menu::all();
		$homesliders=Homeslider::all();
		$homebanners=Homebanner::all();
		$videolinks=Homeyoutube::all();


		//Fill "http://" in link
		for ($x=0;$x<3;$x++){
		if($homebanners[$x]->linktype=='ex'){
		if ($homebanners[$x]->link AND substr($homebanners[$x]->link,0,1) != "/" AND substr($homebanners[$x]->link,0,4) != "http"){
		$homebanners[$x]->link="http://".$homebanners[$x]->link;
				}
			 }
		}
		$x=0;
		foreach($homesliders as $homeslider){

		if ($homesliders[$x]->link AND substr($homesliders[$x]->link,0,1) != "/" AND substr($homesliders[$x]->link,0,4) != "http" AND $homeslider->linktype=='ex'){
		$homesliders[$x]->link="http://".$homesliders[$x]->link;
			}
		$x++;
				}


		if($lang=='eng'){


		return View::make('home')
						 ->with('lang', 'eng')
						 ->with('menus',$menus)
						 ->with('homebanners',$homebanners)
						 ->with('videolinks',$videolinks)
						 ->with('homesliders',$homesliders);

		}else if($lang=='cht'){



		return View::make('home')
						 ->with('lang', 'cht')
						 ->with('menus',$menus)
						 ->with('homebanners',$homebanners)
						 ->with('videolinks',$videolinks)
						 ->with('homesliders',$homesliders);
		}else{



		return View::make('home')
						 ->with('lang', 'chs')
						 ->with('menus',$menus)
						 ->with('homebanners',$homebanners)
						 ->with('videolinks',$videolinks)
						 ->with('homesliders',$homesliders);

			}



		}


}
