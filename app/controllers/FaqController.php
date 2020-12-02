<?php

class FaqController extends BaseController {

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


	

	
	public function Sorting($lang,$series_tab)
	{
		
	
		//FAQ
		if($lang=='eng'){
		
		//Static Variable
		$all_title="ALL";	
		$btn_more_txt="More";
		$btn_close_txt="Close";
		$btn_share_txt="Share";
		
		//DB Connection
		$faqseries=DB::table('faqseries')->where('publish','>' ,0)->orderBy('sequence', 'desc')->get();
		if($series_tab==0){
		$faqs=DB::table('faqs')->get();
		}else{
		$faqs=DB::table('faqs')->where('faqserie_id',$series_tab)->get();
		}
		
		$detail_btn_txt="Detail";
		
		return View::make('faq')
						 ->with('lang', 'eng')
						 ->with('series_tab', $series_tab)
					 	 ->with('detail_btn_txt', $detail_btn_txt)
						  		->with('all_title', $all_title)
								->with('btn_more_txt', $btn_more_txt)
								->with('btn_close_txt', $btn_close_txt)
									->with('btn_share_txt', $btn_share_txt)
						  	->with('faqs', $faqs)
						 ->with('faqseries', $faqseries);
			
		}else if($lang=='cht'){
			
		//Static Variable
		$all_title="全部";	
		$btn_more_txt="顯示更多";	
		$btn_close_txt="關閉";
		$btn_share_txt="分享";
					
		//DB Connection
		$faqseries=DB::table('faqseries')->where('publish','>' ,0)->orderBy('sequence', 'desc')->get();
		if($series_tab==0){
		$faqs=DB::table('faqs')->get();
		}else{
		$faqs=DB::table('faqs')->where('faqserie_id',$series_tab)->get();
		}
					
		$detail_btn_txt="詳細";			
					
		return View::make('faq')
						 ->with('lang', 'cht')
						 	 ->with('series_tab', $series_tab)
							  ->with('detail_btn_txt', $detail_btn_txt)
						 	 ->with('all_title', $all_title)
							 	->with('btn_more_txt', $btn_more_txt)
								->with('btn_close_txt', $btn_close_txt)
									->with('btn_share_txt', $btn_share_txt)
							 ->with('faqs', $faqs)
						     ->with('faqseries', $faqseries);
		}else{
			
		//Static Variable
		$all_title="全部";		
		$btn_more_txt="显示更多";	
		$btn_close_txt="关闭";
		$btn_share_txt="分享";
			
		//DB Connection
		$faqseries=DB::table('faqseries')->where('publish','>' ,0)->orderBy('sequence', 'desc')->get();
		if($series_tab==0){
		$faqs=DB::table('faqs')->get();
		}else{
		$faqs=DB::table('faqs')->where('faqserie_id',$series_tab)->get();
		}

		$detail_btn_txt="详细";
		

	
		return View::make('faq')
						 ->with('lang', 'chs')
						 		->with('series_tab', $series_tab)
								 ->with('detail_btn_txt', $detail_btn_txt)
								->with('all_title', $all_title)
								->with('btn_more_txt', $btn_more_txt)
								->with('btn_close_txt', $btn_close_txt)
									->with('btn_share_txt', $btn_share_txt)
								->with('faqs', $faqs)	  
						 		->with('faqseries', $faqseries);
						 
			}
					
	
	
		}
	
	
}
