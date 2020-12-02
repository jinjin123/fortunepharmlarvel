<?php

class HealthTipsGerdController extends BaseController {

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
		//Health tips gred


		//$healthtipsixes=Healthtipsix::all();
		$healthtipsixp1s=Healthtipsixp1::all();
		$healthtipsixp2s=Healthtipsixp2::all();
		$healthtipsixp3s=Healthtipsixp3::all();

		if($lang=='eng'){

		//Static variable
		$titles=['Detail','Have regular meals','Avoid oily and spicy food','Avoid drinks that irritate your stomach','Quit smoking','Avoid overeating','Alleviate your head while sleeping','Drink water','Avoid tight clothing','Maintain healthy weight range'];

		return View::make('health-tips-gerd')
						 ->with('titles', $titles)
						  ->with('healthtipsixp1s', $healthtipsixp1s)
						  	  ->with('healthtipsixp2s', $healthtipsixp2s)
							  	  ->with('healthtipsixp3s', $healthtipsixp3s)
						 ->with('lang', 'eng')
						 ;


		}else if($lang=='cht'){

		//Static variable
		$titles=['詳情','定時進食','避免吃油膩或辛辣的食物','減少飲用刺激性飲品','戒煙','不要過份進食','調高床頭高度','多喝開水','避免穿着緊身衣物','適量減肥'];

	return View::make('health-tips-gerd')
	 					  ->with('titles', $titles)
							  ->with('healthtipsixp1s', $healthtipsixp1s)
						  	  ->with('healthtipsixp2s', $healthtipsixp2s)
							  	  ->with('healthtipsixp3s', $healthtipsixp3s)
						 ->with('lang', 'cht')
						 ;
		}else{

		//Static variable
		$titles=['详情','定时进食','避免吃油腻或辛辣的食物','减少饮用刺激性饮品','戒烟','不要过份进食','调高床头高度','多喝开水','避免穿着紧身衣物','适量减肥'];

	return View::make('health-tips-gerd')
	 				    ->with('titles', $titles)
								  ->with('healthtipsixp1s', $healthtipsixp1s)
						  	  ->with('healthtipsixp2s', $healthtipsixp2s)
							  	  ->with('healthtipsixp3s', $healthtipsixp3s)
						 ->with('lang', 'chs')
						 ;

			}



		}


}
