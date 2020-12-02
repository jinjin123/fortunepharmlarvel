<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



/* Login Route */
// Route::get('member_login', function()
// {
// 	return View::make('member_login');
// });

Route::controller('/cpanel', 'UserController');

/* Logout Route */
Route::get('/logout','UserController@getLogout');

/* Back to site Route */
Route::get('back', function()
{
   echo '<script type="text/javascript">'
   , 'window.location.replace("http://www.fortunepharm.com/cpanel");'
   , 'window.open("http://www.fortunepharm.com/","_blank");'
   , '</script>';
});

/* Default Route */
Route::get('',['uses' =>'HomeController@DefaultHome']);

/*Pages Route */
Route::get('/{lang}/home',['uses' =>'HomeController@Sorting']);
Route::get('/{lang}/product/{market_tab}/{series_tab}/{product_tab}',['uses' =>'ProductController@Sorting']);
Route::get('/{lang}/product/{market_tab}/{series_tab}/{product_tab}/{redirect_product}',['uses' =>'ProductController@Sorting2']);
Route::get('/{lang}/children-product/{market_tab}/{series_tab}/{product_tab}',['uses' =>'ChildrenProductController@Sorting']);
Route::get('/{lang}/children-product/{market_tab}/{series_tab}/{product_tab}/{redirect_product}',['uses' =>'ChildrenProductController@Sorting2']);
Route::get('/{lang}/product-healthcare',['uses' =>'HealthcareProductController@Sorting']);
Route::get('/{lang}/product_take',['uses' =>'ProducttakeController@Sorting']);
Route::get('/{lang}/faq/{series_tab}',['uses' =>'FaqController@Sorting']);
Route::get('/{lang}/company-history/',['uses' =>'CompanyHistoryController@Sorting']);
Route::get('/{lang}/factory-intro/',['uses' =>'FactoryIntroController@Sorting']);
Route::get('/{lang}/contact-us/',['uses' =>'ContactusController@Sorting']);
Route::get('/{lang}/news/{page}',['uses' =>'NewsController@Sorting']);
Route::get('/{lang}/latest-offers/',['uses' =>'LatestoffersController@Sorting']);
Route::get('/{lang}/latest-offers2/',['uses' =>'Latestoffers2Controller@Sorting']);
Route::get('/{lang}/charity-fund/',['uses' =>'CharityfundController@Sorting']);
Route::get('/{lang}/advertisements/{cursor_yr}/',['uses' =>'AdvertisementsController@Sorting']);
Route::get('/{lang}/terms/',['uses' =>'TermsController@Sorting']);
Route::get('/{lang}/privacy/',['uses' =>'PrivacyController@Sorting']);
Route::get('/{lang}/health-tips/',['uses' =>'HealthTipsController@Sorting']);
Route::get('/{lang}/health-tips-children/',['uses' =>'HealthTipsChildrenController@Sorting']);
Route::get('/{lang}/health-tips-pain/',['uses' =>'HealthTipsPainController@Sorting']);
Route::get('/{lang}/health-tips-cough/',['uses' =>'HealthTipsCoughController@Sorting']);
Route::get('/{lang}/health-tips-allergy/',['uses' =>'HealthTipsAllergyController@Sorting']);
Route::get('/{lang}/health-tips-gerd/',['uses' =>'HealthTipsGerdController@Sorting']);
Route::get('/{lang}/health-tips-bloating/',['uses' =>'HealthTipsBloatingController@Sorting']);
Route::get('/{lang}/other-services/',['uses' => 'HomeController@otherservices']);
/*AJAX Route*/
function _empty($v){
	return empty($v);
}
function arrayFindDiff($dynamic, $static){
	$diff = array();
	for( $d=0; $d<count($dynamic); $d++ ){
		if( !in_array($dynamic[ $d ], $static) ){
			array_push($diff, $dynamic[ $d ]);
		}
	}
	return $diff;
}
function array_group($inArray, $keyName) {
	if (is_array($inArray) && count($inArray)>0) {
		$cabinet = array();
		$tempBox = array();
		$prevoius_sec_name = $inArray[0][$keyName];
		//print(count($inArray)."<br><hr><br>");
		for($b=0;$b<count($inArray);$b++){
			$box = $inArray[$b];
			if ($prevoius_sec_name != $box[$keyName]){
				array_push($cabinet, $tempBox); // push all of the same secname boxes into cabinet
				$tempBox = array();
				$prevoius_sec_name = $box[$keyName];
			}
			array_push($tempBox, $box);	//push the boxes in same group (a same sec_name)
		}
		 array_push($cabinet, $tempBox);
		 return $cabinet;
	}
}
function resultSetObjectToArray($resultSetObj){
	$rtn = array();
	foreach( $resultSetObj as $rowObj){
		array_push($rtn, (array)$rowObj);
	}
	return $rtn;
}
function groupRSProductSym($resultSet){
	$rtn = array();
	if( count($resultSet) > 0 ){
		$goupedResultSet = array_group(resultSetObjectToArray($resultSet), 'product_id');
		foreach($goupedResultSet as $goupedProduct){
			$tmp = array('product_id' => $goupedProduct[0]['product_id'], 'fixedindication_ids' => array() );
			foreach($goupedProduct as $product){
				array_push($tmp['fixedindication_ids'], $product['fixedindication_id']);
			}
			array_push($rtn, $tmp);
		}
	}
	return $rtn;
}
Route::post('/product_take', function(){
	$input_symptoms=array();
	$lang_name=Input::get('langname');
	$product =array();
	$prodcut_symptoms=DB::table('products_fixedindications')->get();
	$series=DB::table('series')->get();
	if(Request::ajax()){
		$products_details = array();
		$input_symptoms=Input::get('symptoms');
		//Get matched products by currnt symptoms
		$matched_product_ids_arr=DB::table('products_fixedindications')->select('fixedindication_id', 'product_id')->whereIn('fixedindication_id',$input_symptoms)->orderBy('product_id', 'asc')->get();
		$likelyMatchProducts = groupRSProductSym($matched_product_ids_arr);
		//find which product are 100% cover the $input_symptoms
		$matched_product_ids = array();
		foreach($likelyMatchProducts as $product){
			$temp = arrayFindDiff($input_symptoms, $product['fixedindication_ids']);
			if( empty($temp) ){
				array_push($matched_product_ids, $product['product_id']);
			}
		}
		//$orginalMatchedProduct_ids = $matched_product_ids;
		//print("<pre>" . print_r($matched_product_ids, 1) . "</pre>");
		//find which symptoms should be turn on in FE
		$first_matched_product_symptoms_arr=DB::table('products_fixedindications')->distinct()->select('fixedindication_id')->whereIn('product_id',$matched_product_ids)->get();
		$first_matched_product_symptoms = array();
		foreach ($first_matched_product_symptoms_arr as $first_matched_product_symptom){
			array_push($first_matched_product_symptoms, $first_matched_product_symptom->fixedindication_id);
		}
		/************************
		     Special Scenarios
		 ************************/
		// IF ONLY 傷風感冒，冇咳 (Rule A)
		if( _empty(arrayFindDiff($input_symptoms, array(1, 2, 3, 4, 5, 6))) && !in_array(10, $input_symptoms) && !in_array(11, $input_symptoms) ){
			// product image id
			$matched_product_ids = [1, 4, 14, 15];
		}
		// IF ONLY 傷風感冒，冇咳+冇流鼻水+冇噴嚏  (New Rule)
		if( _empty(arrayFindDiff($input_symptoms, array(1, 2, 3, 4, 5, 6))) && !in_array(10, $input_symptoms) && !in_array(11, $input_symptoms) && !in_array(1, $input_symptoms) && !in_array(2, $input_symptoms) ){
			$matched_product_ids = [1, 4, 12, 14, 15];
		}
		// IF ONLY 發燒痛症 (Rule B)
		if( _empty(arrayFindDiff($input_symptoms, array(4, 5, 6, 8))) ){
			$matched_product_ids = [18, 19, 24, 25];
		}
		// IF ONLY 咳喇 (Rule C)
		if( sizeof($input_symptoms)==2 && in_array(10, $input_symptoms) && in_array(11, $input_symptoms)){
			$matched_product_ids = [6, 11, 13];
		}
		// IF ONLY 喉嚨痛 (Rule D)
		if( sizeof($input_symptoms)==1 && $input_symptoms[0]==6 ){
			$matched_product_ids = [2,7];
		}
		// IF ONLY 敏感 (Rule E)
		if( sizeof($input_symptoms)==1 && $input_symptoms[0]==9 ){
			$matched_product_ids = [9, 10];
		}
		//Store the products' details
		$products_details=DB::table('products')->select( 'id', 'name_eng', 'name_cht', 'name_chs', 'short_desc_eng', 'short_desc_cht', 'short_desc_chs', 'product_img1', 'product_img2', 'product_img3', 'markets_id', 'series_id', 'reg_num', 'indication_cap_eng', 'indication_cap_cht', 'indication_cap_chs', 'indication_remark_eng', 'indication_remark_cht', 'indication_remark_chs', 'condition')->whereIn('id',$matched_product_ids)->where('publish',1)->where('markets_id',1)->get();
		$product_take_data=array(
			"lang_name" => $lang_name,
			"first_matched_product_symptoms"=>$first_matched_product_symptoms,
			"products_details"=>$products_details,
			"series"=>$series,
			"input_symptoms"=>$input_symptoms
		);
		return $product_take_data;
	}
});
?>
