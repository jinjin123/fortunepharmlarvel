<?php


//Page Product

class ProductController extends BaseController {


	
	public function Sorting($lang,$market_tab,$series_tab,$product_tab)
	{
		//Market_tab String to int
		$market_tab_int=1;
		if($market_tab=='hongkong'){$market_tab_int=1;}
		if($market_tab=='china'){$market_tab_int=2;}
		if($market_tab=='oversea'){$market_tab_int=3;}
		
		if($lang=='eng'){
			
		//Static variable
		$reg_num_label="Reg. No.";
		if($market_tab=='oversea'){$reg_num_label='';}	
		$details_title=array('Presentation and Pack Size','Indications','Dosage and Administration','Active Ingredients','Caution','Storage and Packaging Safety');
		$details_title_china=array('Presentation and Pack Size','Indications','Dosage and Administration','Active Ingredients','Caution','Storage and Packaging Safety');
		$more="More";
		$package_title="Packing";
		$detail="Detail";
		
		//DB Connection
		$markets = Market::all();
		//$market_series=DB::table('markets_series')->orderBy('id', 'asc')->get();
		$series=DB::table('series')->where('markets_id', $market_tab_int)->orderBy('sequence', 'desc')->get();   
		$products=DB::table('products')->where('markets_id', $market_tab_int)->where('series_id', $series_tab)->orderBy('order_seq', 'desc')->where('publish','>' ,0)->get();
		$current_serie=DB::table('series')->where('id', $series_tab)->where('publish','>' ,0)->get();	
	    $indications=Indication::all();	
		$indications_filter=DB::table('products_indications')->where('product_id','=',$products[$product_tab]->id)->get();
		$indication_caption=$products[$product_tab]->indication_cap_eng;
		$indication_remark=$products[$product_tab]->indication_remark_eng;   
		$indicationsnames = [];
		//Default Banner
		$defalutbanners=DB::table('productbanners')->where('def','=' ,1)->orderBy('updated_at', 'desc')->get();
		$banner1=$defalutbanners[0];
		$banner2=$defalutbanners[1];
		
		//Find all the matched banners as series 
		$productbanners=Productbanner::all();
		$productbannersids=DB::table('productbanners_series')->where('serie_id',$series_tab)->get();
		
		
		//Case 1: Having two product banner 
		if(!empty($productbannersids[0]) AND !empty($productbannersids[1])){
		$banner1=$productbanners[$productbannersids[0]->productbanner_id-1];
		$banner2=$productbanners[$productbannersids[1]->productbanner_id-1];
		}
		     
		//Case 2: Having one product banner 
		if(!empty($productbannersids[0])){
		$banner1=$productbanners[$productbannersids[0]->productbanner_id-1];
		}
	
		
		//Output series name and id 
	
		foreach ($series as $serie){
		if ($serie->publish ==1){
		$series_data_name[]=$serie->name_eng;
		$seriesids[]=$serie->id;
		$series_main_series[]=$serie->main_series;
		}
		}
		
		

		

		
		//Output Market name
		foreach ($markets as $market)	
		{
		$marketnames[]=$market->name_eng;	
		}
		
		//Output Indication name
		foreach ($indications_filter as $indication_filter)
		{	
		$indicationsnames[]= $indications[$indication_filter->indication_id-1]->indication_eng;
		}
		
	
		
		return View::make('product')
					 ->with('lang', 'eng')
					 ->with('marketname', $marketnames)
					 ->with('series', $series)
					 ->with('series_data_name', $series_data_name)
					 ->with('seriesids', $seriesids)
					 ->with('current_serie', $current_serie)
					 ->with('series_main_series', $series_main_series)
					 ->with('market_tab', $market_tab)
					 ->with('series_tab', $series_tab)
					 ->with('details_title', $details_title)
					 ->with('details_title_china', $details_title_china)
					 ->with('indicationsnames', $indicationsnames ? $indicationsnames : [])
					 ->with('reg_num_label', $reg_num_label)
					 ->with('indication_caption', $indication_caption)
					 ->with('indication_remark', $indication_remark)
					 ->with('banner1', $banner1)
					 ->with('banner2', $banner2)
					 ->with('products', $products)
					 ->with('package_title',$package_title)
					 ->with('product_tab', $product_tab)
					 ->with('more', $more)
					 ->with('detail', $detail);
					 
	   	}else if($lang=='cht'){
	   		
	    //Static variable
	   	$reg_num_label="香港註冊証號碼";
		if($market_tab=='china'){$reg_num_label='中華人民共和國醫藥產品注冊証號';}
		if($market_tab=='oversea'){$reg_num_label='';}	
		$details_title=array('形態及包裝','主治症狀','劑量服法','主要成份','注意事項','儲存及包裝安全');
		$details_title_china=array('形態及包裝','建議人群','劑量服法','主要成份','注意事項','儲存及包裝安全');
		$more="了解更多";
		$package_title="包裝";
		
		$markets = Market::all();
		$market_series=DB::table('markets_series')->get();
		$series=DB::table('series')->where('markets_id', $market_tab_int)->orderBy('sequence', 'desc')->get(); 
		$detail="詳情";
		
		

	
		
		
	
		
		
	
		
		
		//Output series name and id 
	
		foreach ($series as $serie){
		if ($serie->publish ==1){
		$series_data_name[]=$serie->name_cht;
		$seriesids[]=$serie->id;
		$series_main_series[]=$serie->main_series;
		}
		}
		
	
	
		//Default Banner
		$defalutbanners=DB::table('productbanners')->where('def','=' ,1)->orderBy('updated_at', 'desc')->get();
		$banner1=$defalutbanners[0];
		$banner2=$defalutbanners[1];
		
		//Find all the matched banners as series 
		$productbanners=Productbanner::all();
		$productbannersids=DB::table('productbanners_series')->where('serie_id',$series_tab)->get();
		
		
		//Case 1: Having two product banner 
		if(!empty($productbannersids[0]) AND !empty($productbannersids[1])){
		$banner1=$productbanners[$productbannersids[0]->productbanner_id-1];
		$banner2=$productbanners[$productbannersids[1]->productbanner_id-1];
		}
		     
		//Case 2: Having one product banner 
		if(!empty($productbannersids[0])){
		$banner1=$productbanners[$productbannersids[0]->productbanner_id-1];
		}
		
		
		$products=DB::table('products')->where('markets_id', $market_tab_int)->where('series_id', $series_tab)->orderBy('order_seq', 'desc')->where('publish','>' ,0)->get();	
		$current_serie=DB::table('series')->where('id', $series_tab)->where('publish','>' ,0)->get();	
		$indications=Indication::all();
		$indications_filter=DB::table('products_indications')->where('product_id','=',$products[$product_tab]->id)->get();
		
		$indication_caption=$products[$product_tab]->indication_cap_cht;
		$indication_remark=$products[$product_tab]->indication_remark_cht;
		$indicationsnames = [];
		foreach ($indications_filter as $indication_filter)
		{
		
		$indicationsnames[]= $indications[$indication_filter->indication_id-1]->indication_cht;
		}
		
		foreach ($markets as $market)	
		{
		$marketnames[]=$market->name_cht;	
		}
		
		return View::make('product')
					 ->with('lang', 'cht')
					 ->with('marketname', $marketnames)
					 ->with('series', $series)
					  ->with('series_data_name', $series_data_name)
					 ->with('seriesids', $seriesids)
					 ->with('current_serie', $current_serie)
					 ->with('series_main_series', $series_main_series)
					 ->with('market_tab', $market_tab)
					 ->with('series_tab', $series_tab)
					 ->with('details_title', $details_title)
					 ->with('details_title_china', $details_title_china)
					 ->with('indicationsnames', $indicationsnames ? $indicationsnames : [])
					 ->with('reg_num_label', $reg_num_label)
					 ->with('indication_caption', $indication_caption)
					 ->with('indication_remark', $indication_remark)
			 		->with('banner1', $banner1)
					 ->with('banner2', $banner2)
					 ->with('package_title',$package_title)
					 ->with('products', $products)
					 ->with('product_tab', $product_tab)
					 ->with('more', $more)
					 ->with('detail', $detail);
		}else{
		
		//Static variable	
	   	$reg_num_label="香港注册证号码";	
		if($market_tab=='china'){$reg_num_label='中华人民共和国医药产品注册证号';}	
		if($market_tab=='oversea'){$reg_num_label='';}	
		$details_title=array('药物型态及包装','主治症状','剂量服法','主要成份','注意事项','储存及包装安全');
		$details_title_china=array('药物型态及包装','建议人群','剂量服法','主要成份','注意事项','储存及包装安全');
		$more="了解更多";
		$package_title="包装";
		$detail="详情";

		$markets = Market::all();
		$market_series=DB::table('markets_series')->get();
		$series=DB::table('series')->where('markets_id', $market_tab_int)->orderBy('sequence', 'desc')->get(); 
		
	
		
		

		
		
	
		
		//Output series name and id 
	
		foreach ($series as $serie){
		if ($serie->publish ==1){
		$series_data_name[]=$serie->name_chs;
		$seriesids[]=$serie->id;
		$series_main_series[]=$serie->main_series;
		}
		}
		
	
		//Default Banner
		$defalutbanners=DB::table('productbanners')->where('def','=' ,1)->orderBy('updated_at', 'desc')->get();
		$banner1=$defalutbanners[0];
		$banner2=$defalutbanners[1];
		
		//Find all the matched banners as series 
		$productbanners=Productbanner::all();
		$productbannersids=DB::table('productbanners_series')->where('serie_id',$series_tab)->get();
		
		
		//Case 1: Having two product banner 
		if(!empty($productbannersids[0]) AND !empty($productbannersids[1])){
		$banner1=$productbanners[$productbannersids[0]->productbanner_id-1];
		$banner2=$productbanners[$productbannersids[1]->productbanner_id-1];
		}
		     
		//Case 2: Having one product banner 
		if(!empty($productbannersids[0])){
		$banner1=$productbanners[$productbannersids[0]->productbanner_id-1];
		}
							
				
		$products=DB::table('products')->where('markets_id', $market_tab_int)->where('series_id', $series_tab)->orderBy('order_seq', 'desc')->where('publish','>' ,0)->get();	
		$current_serie=DB::table('series')->where('id', $series_tab)->where('publish','>' ,0)->get();	
		$indications=Indication::all();
		$indications_filter=DB::table('products_indications')->where('product_id','=',$products[$product_tab]->id)->get();
		
		$indication_caption=$products[$product_tab]->indication_cap_chs;
		$indication_remark=$products[$product_tab]->indication_remark_chs;
		$indicationsnames = [];
		foreach ($indications_filter as $indication_filter)
		{
		
		$indicationsnames[]= $indications[$indication_filter->indication_id-1]->indication_chs;
		}
		
		foreach ($markets as $market)	
		{
		$marketnames[]=$market->name_chs;	
		}
		
		return View::make('product')
					 ->with('lang', 'chs')
					 ->with('marketname', $marketnames)
					 ->with('series', $series)
					  ->with('series_data_name', $series_data_name)
					 ->with('seriesids', $seriesids)
					 ->with('current_serie', $current_serie)
					 ->with('series_main_series', $series_main_series)
					 ->with('market_tab', $market_tab)
					 ->with('series_tab', $series_tab)
					 ->with('details_title', $details_title)
					 ->with('details_title_china', $details_title_china)
					 ->with('indicationsnames', $indicationsnames ? $indicationsnames : [])
					 ->with('reg_num_label', $reg_num_label)
					 ->with('indication_caption', $indication_caption)
					 ->with('indication_remark', $indication_remark)
			 			->with('banner1', $banner1)
					 ->with('banner2', $banner2)
					 ->with('package_title',$package_title)
					 ->with('products', $products)
					 ->with('product_tab', $product_tab)
					 ->with('more', $more)
					  ->with('detail', $detail);
				}
														
	}

public function Sorting2($lang,$market_tab,$series_tab,$product_tab,$redirect_product)
	{
		
	//Market_tab String to int
	$market_tab_int=1;
	if($market_tab=='hongkong'){$market_tab_int=1;}
	if($market_tab=='china'){$market_tab_int=2;}
	if($market_tab=='oversea'){$market_tab_int=3;}	
		
	//DB Connection	
	//Use $redirect_product(ID) to find this product's series
	$redirect_product_details=DB::table('products')->where('id', $redirect_product)->get();
	
	//Use series ID to find all this series's product
	$serie_products=DB::table('products')->where('markets_id', $market_tab_int)->where('series_id', $redirect_product_details[0]->series_id)->orderBy('order_seq', 'desc')->get();
	
	foreach($serie_products as $serie_product){
	$serie_products_namecht[]=$serie_product->name_cht;
	}
	
	//Find the location of redirect product in $serie_products array
	$key=array_search($redirect_product_details[0]->name_cht, $serie_products_namecht);
		
	return Redirect::action('ProductController@Sorting', array('lang' => $lang,'$market_tab'=>$market_tab,'$series_tab'=>$series_tab,'$product_tab'=>$key));
	}

}
