<?php

class ChildrenProductController extends BaseController {

	
	public function Sorting($lang,$market_tab,$series_tab,$product_tab)
	{
		$market_tab_int=1;
		if($market_tab=='HongKong'){$market_tab_int=1;}
		if($market_tab=='china'){$market_tab_int=2;}
		if($market_tab=='oversea'){$market_tab_int=3;}
		
		
		if($lang=='eng'){
			
		//Static variable
		$reg_num_label="Reg. No.";
		if($market_tab=='oversea'){$reg_num_label='';}	
		$details_title=array('Presentation and Pack Size','Indications','Dosage and Administration','Active Ingredients','Caution','Storage and Packaging Safety');
		$details_title_china=array('Presentation and Pack Size','Indications','Dosage and Administration','Active Ingredients','Caution','Storage and Packaging Safety');
		$more="More";
		$healthcare_menu_title="Healthcare Series";
		$package_title="Packing";	 
		
		$markets = Market::all();
		$market_series=DB::table('markets_series')->get();
		$series=DB::table('series')->where('markets_id', $market_tab_int)->orderBy('sequence', 'desc')->get();  
		$detail="Detail";
		
		
		$series_data=array();
		foreach ($series as $serie){
		if ($serie->main_series=='Children Series' AND $serie->publish ==1){
		$series_data_name[]=$serie->name_eng;
		$seriesids[]=$serie->id;
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
				 
		$indications=Indication::all();
		$indications_filter=DB::table('products_indications')->where('product_id','=',$products[$product_tab]->id)->get();
		
		$indication_caption=$products[$product_tab]->indication_cap_eng;
		$indication_remark=$products[$product_tab]->indication_remark_eng;
		
		foreach ($indications_filter as $indication_filter)
		{
		
		$indicationsnames[]= $indications[$indication_filter->indication_id-1]->indication_eng;
		}
		
		foreach ($markets as $market)	
		{
		$marketnames[]=$market->name_eng;	
		}
		
		return View::make('children-product')
					 ->with('lang', 'eng')
					 ->with('marketname', $marketnames)
					 ->with('series', $series)
					 ->with('series_data_name', $series_data_name)
					 ->with('seriesids', $seriesids)
					 ->with('market_tab', $market_tab)
					 ->with('series_tab', $series_tab)
					 ->with('details_title', $details_title)
					 ->with('details_title_china', $details_title_china)
					 ->with('indicationsnames', $indicationsnames)
					 ->with('reg_num_label', $reg_num_label)
					 ->with('indication_caption', $indication_caption)
					 ->with('indication_remark', $indication_remark)
					 ->with('banner1',$banner1)
					 ->with('banner2',$banner2)
					 ->with('products', $products)
					 ->with('product_tab', $product_tab)
					 ->with('more', $more)
					     ->with('package_title', $package_title)
					  ->with('detail', $detail)
					  ->with('healthcare_menu_title', $healthcare_menu_title);
					 
					 
					 
	   	}else if($lang=='cht'){
	   		
	    //Static variable	
	   	$reg_num_label="香港註冊証號碼";
		if($market_tab=='china'){$reg_num_label='中華人民共和國醫藥產品注冊証號';}
		if($market_tab=='oversea'){$reg_num_label='';}	
		$details_title=array('形態及包裝','主治症狀','劑量服法','主要成份','注意事項','儲存及包裝安全');
		$details_title_china=array('形態及包裝','建議人群','劑量服法','主要成份','注意事項','儲存及包裝安全');
		$more="了解更多";
		$healthcare_menu_title="好幸福系列";
		$detail="詳情";
		$package_title="包裝";
		
		$markets = Market::all();
		$market_series=DB::table('markets_series')->get();
		$series=DB::table('series')->where('markets_id', $market_tab_int)->orderBy('sequence', 'desc')->get();  
	
		
		
		$series_data=array();
		foreach ($series as $serie){
		if ($serie->main_series=='Children Series' AND $serie->publish ==1){
		$series_data_name[]=$serie->name_cht;
		$seriesids[]=$serie->id;
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
	

		$productbanners=DB::table('productbanners')->where('markets_id','=' ,$market_tab_int)->where('series_id',$series_tab)->orderBy('updated_at', 'desc')->get();
		
		if(empty($productbanners[0]) AND empty($productbanners[1])){
	 	$productbanners=DB::table('productbanners')->where('def','=' ,1)->orderBy('updated_at', 'desc')->get();

		}
		
		if(empty($productbanners[1])){
		$swap_banner=DB::table('productbanners')->where('def','=' ,1)->orderBy('updated_at', 'desc')->take(1)->get();
		$productbanners[1]=$swap_banner[0];
		
		}
		
		$products=DB::table('products')->where('markets_id', $market_tab_int)->where('series_id', $series_tab)->orderBy('order_seq', 'desc')->where('publish','>' ,0)->get();	
				 
		$indications=Indication::all();
		$indications_filter=DB::table('products_indications')->where('product_id','=',$products[$product_tab]->id)->get();
		
		$indication_caption=$products[$product_tab]->indication_cap_cht;
		$indication_remark=$products[$product_tab]->indication_remark_cht;
		
		foreach ($indications_filter as $indication_filter)
		{
		$indicationsnames[]= $indications[$indication_filter->indication_id-1]->indication_cht;
		}
		
		foreach ($markets as $market)	
		{
		$marketnames[]=$market->name_cht;	
		}
		
		return View::make('children-product')
					 ->with('lang', 'cht')
					 ->with('marketname', $marketnames)
					 ->with('series', $series)
					 ->with('series_data_name', $series_data_name)
					 ->with('seriesids', $seriesids)
					 ->with('market_tab', $market_tab)
					 ->with('series_tab', $series_tab)
					 ->with('details_title', $details_title)
					 ->with('details_title_china', $details_title_china)
					 ->with('indicationsnames', $indicationsnames)
					 ->with('reg_num_label', $reg_num_label)
					 ->with('indication_caption', $indication_caption)
					 ->with('indication_remark', $indication_remark)
			 		 ->with('banner1',$banner1)
					 ->with('banner2',$banner2)
					 ->with('products', $products)
					 ->with('product_tab', $product_tab)
					  ->with('more', $more)
					    ->with('package_title', $package_title)
					   ->with('detail', $detail)
					  ->with('healthcare_menu_title', $healthcare_menu_title);
		}else{
		
		//Static variable	
	   	$reg_num_label="香港注册证号码";	
		if($market_tab=='china'){$reg_num_label='中华人民共和国医药产品注册证号';}	
		if($market_tab=='oversea'){$reg_num_label='';}	
		$details_title_china=array('药物型态及包装','建议人群','剂量服法','主要成份','注意事项','储存及包装安全');
		$details_title=array('药物型态及包装','主治症状','剂量服法','主要成份','注意事项','储存及包装安全');
		$more="了解更多";
		$healthcare_menu_title="好幸福系列";
		$detail="详情";
	    $package_title="包装";
		
		
		$markets = Market::all();
		$market_series=DB::table('markets_series')->get();
		$series=DB::table('series')->where('markets_id', $market_tab_int)->orderBy('sequence', 'desc')->get();  
	
		
		
		$series_data=array();
		foreach ($series as $serie){
		if ($serie->main_series=='Children Series' AND $serie->publish ==1){
		$series_data_name[]=$serie->name_chs;
		$seriesids[]=$serie->id;
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
	
	
		$productbanners=DB::table('productbanners')->where('markets_id','=' ,$market_tab_int)->where('series_id',$series_tab)->orderBy('updated_at', 'desc')->get();
		
		if(empty($productbanners[0]) AND empty($productbanners[1])){
	 	$productbanners=DB::table('productbanners')->where('def','=' ,1)->orderBy('updated_at', 'desc')->get();

		}
		
		if(empty($productbanners[1])){
		$swap_banner=DB::table('productbanners')->where('def','=' ,1)->orderBy('updated_at', 'desc')->take(1)->get();
		$productbanners[1]=$swap_banner[0];
	
		}
		
		$products=DB::table('products')->where('markets_id', $market_tab_int)->where('series_id', $series_tab)->orderBy('order_seq', 'desc')->where('publish','>' ,0)->get();	
				 
		$indications=Indication::all();
		$indications_filter=DB::table('products_indications')->where('product_id','=',$products[$product_tab]->id)->get();
		
		$indication_caption=$products[$product_tab]->indication_cap_chs;
		$indication_remark=$products[$product_tab]->indication_remark_chs;
		
		foreach ($indications_filter as $indication_filter)
		{
		
		$indicationsnames[]= $indications[$indication_filter->indication_id-1]->indication_chs;
		}
		
		foreach ($markets as $market)	
		{
		$marketnames[]=$market->name_chs;	
		}
		
		return View::make('children-product')
					 ->with('lang', 'chs')
					 ->with('marketname', $marketnames)
					 ->with('series', $series)
					 ->with('series_data_name', $series_data_name)
					 ->with('seriesids', $seriesids)
					 ->with('market_tab', $market_tab)
					 ->with('series_tab', $series_tab)
					 ->with('details_title', $details_title)
					 ->with('details_title_china', $details_title_china)
					 ->with('indicationsnames', $indicationsnames)
					 ->with('reg_num_label', $reg_num_label)
					 ->with('indication_caption', $indication_caption)
					 ->with('indication_remark', $indication_remark)
			 		 ->with('banner1',$banner1)
					 ->with('banner2',$banner2)
					 ->with('products', $products)
					 ->with('product_tab', $product_tab)
					  ->with('more', $more)
					      ->with('package_title', $package_title)
					    ->with('detail', $detail)
					  ->with('healthcare_menu_title', $healthcare_menu_title);
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
		
	return Redirect::action('ChildrenProductController@Sorting', array('lang' => $lang,'$market_tab'=>$market_tab,'$series_tab'=>$series_tab,'$product_tab'=>$key));
	}

}
