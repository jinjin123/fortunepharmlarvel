<?php

//Healthcare page

class HealthcareProductController extends BaseController {
		
	public function Sorting($lang)
	{

		if($lang=='eng'){
		//Static variable
		$more="More detail, please visit:";
			
		$markets = Market::all();
		$series =DB::table('series')->where('markets_id', 1)->where('main_series', 'Children Series')->get();

		$healthcares=DB::table('healthcares')->orderBy('order_seq', 'desc')->get();
		$healthcare_menu_title='Healthcare Series';
	
		foreach ($markets as $market)
		{
		$marketnames[]=$market->name_eng;	
		}
		
		foreach ($series as $serie)
		{
		$seriesnames[]=$serie->name_eng;	
		}
		
	
		return View::make('product-healthcare')
					 ->with('lang', 'eng')
					 ->with('marketname', $marketnames)
					 ->with('seriesnames', $seriesnames)
					 ->with('healthcares', $healthcares)
					 	  ->with('more', $more)
					 ->with('healthcare_menu_title', $healthcare_menu_title);
					 
	   	}else if($lang=='cht'){
	   		
		//Static variable
		$more="產品詳情 請瀏覽";	
			
	   	$markets = Market::all();
		$series =DB::table('series')->where('markets_id', 1)->where('main_series', 'Children Series')->get();
		$healthcares=Healthcare::all();
		$healthcare_menu_title='好幸福系列';
	
		foreach ($markets as $market)
		{
		$marketnames[]=$market->name_cht;	
		}
		
		foreach ($series as $serie)
		{
		$seriesnames[]=$serie->name_cht;	
		}
		
		return View::make('product-healthcare')
					 ->with('lang', 'cht')
					 ->with('marketname', $marketnames)
					 ->with('seriesnames', $seriesnames)
					 ->with('healthcares', $healthcares)
					 	  ->with('more', $more)
					 ->with('healthcare_menu_title', $healthcare_menu_title);
					 
			
		}else{
			
		//Static variable
		$more="产品详情 请浏览";	
		
		$markets = Market::all();
		$series =DB::table('series')->where('markets_id', 1)->where('main_series', 'Children Series')->get();
		$healthcares=Healthcare::all();
		$healthcare_menu_title='好幸福系列';
	
		foreach ($markets as $market)
		{
		$marketnames[]=$market->name_chs;	
		}
		
		foreach ($series as $serie)
		{
		$seriesnames[]=$serie->name_chs;	
		}
		
		return View::make('product-healthcare')
					 ->with('lang', 'chs')
					 ->with('marketname', $marketnames)
					 ->with('seriesnames', $seriesnames)
					 ->with('healthcares', $healthcares)
					  ->with('more', $more)
					 ->with('healthcare_menu_title', $healthcare_menu_title);
				}
		}


}
