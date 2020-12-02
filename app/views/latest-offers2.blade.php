@include('global')
<?php
$page="latest-offers2";
$lang_title="title_".$lang;
$lang_desc="desc_".$lang;

?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head')
<body id="lastest-offers" class="contact-section">
	<div id="wrapper">
			@include('layouts/sidebar')
		<!-- Page Content -->
		<div id="page-content-wrapper">
		@include('layouts/header')
				@include('layouts/contact-nav')
			<div id="main">
				<div class="container-fluid">
					<section id="banner-wrapper">
					<?php if($lang=='eng'):?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/offers_banner_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/offers_banner_mobile_en.jpg" class="visible-xs">
						<?php elseif($lang=='cht'):?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/offers_banner.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/offers_banner_mobile.jpg" class="visible-xs">
						<?php else:?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/offers_banner_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/offers_banner_mobile_sc.jpg" class="visible-xs">
						<?php endif;?>
					</section>
					<section id="offers-wrapper">
						<?php if(0):?>
						<div class="row">
							<div class="col-sm-6 img-wrapper">
								<img src="assets/img/offers_img_1.jpg">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>【幸福體 "貼"您需要】</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
									<p>天氣不似預期，好易會患上感冒，甚至發燒，幸福當然會關心您嘅需要啦！</p>
									<p>&nbsp;</p>
									<p>由即日起於屈臣氏購買幸福傷風素36片裝/無睡意幸福傷風素36片裝/好幸福七星茶/好幸福開奶茶，即送好幸福退熱貼一盒！快啲行動啦！</p>
									<p>&nbsp;</p>
									<p>詳情請致電屈臣氏顧客服務熱線：2608 8383</p>
									<p>推廣日期：即日起至2015年1月29日</p>
									<p>&nbsp;</p>
									<p>*數量有限　送完即止</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 img-wrapper">
								<img src="assets/img/offers_img_2.jpg">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>【綠色環保．為地球走多步】</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
									<p>天氣不似預期，好易會患上感冒，甚至發燒，幸福當然會關心您嘅需要啦！</p>
									<p>&nbsp;</p>
									<p>由即日起於屈臣氏購買幸福傷風素36片裝/無睡意幸福傷風素36片裝/好幸福七星茶/好幸福開奶茶，即送好幸福退熱貼一盒！快啲行動啦！</p>
									<p>&nbsp;</p>
									<p>詳情請致電屈臣氏顧客服務熱線：2608 8383</p>
									<p>推廣日期：即日起至2015年1月29日</p>
									<p>&nbsp;</p>
									<p>*數量有限　送完即止</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 img-wrapper">
								<img src="assets/img/offers_img_3.jpg">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>【幸福體 "貼"您需要】</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
									<p>由即日起至11月27號，凡於萬寧或屈臣氏購買任何【幸福醫藥】產品，即可以「環保價」$5換購【幸福環保袋】，既環保又實用，齊齊為地球出一分力啦</p>
									<p>&nbsp;</p>
									<p>詳情請查詢:</p>
									<p>萬寧客戶服務熱線 : 2299 3381</p>
									<p>屈臣氏客戶服務熱線 : 2608 8383</p>
									<p>&nbsp;</p>
									<p>*此優惠只適用於香港地區</p>
									<p>*數量有限 送完即止</p>
								</div>
							</div>
						</div>
						<div class="row hide">
							<div class="col-sm-6 img-wrapper">
								<img src="assets/img/offers_img_3.jpg">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>【幸福體 "貼"您需要】</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
									<p>由即日起至11月27號，凡於萬寧或屈臣氏購買任何【幸福醫藥】產品，即可以「環保價」$5換購【幸福環保袋】，既環保又實用，齊齊為地球出一分力啦</p>
									<p>&nbsp;</p>
									<p>詳情請查詢:</p>
									<p>萬寧客戶服務熱線 : 2299 3381</p>
									<p>屈臣氏客戶服務熱線 : 2608 8383</p>
									<p>&nbsp;</p>
									<p>*此優惠只適用於香港地區</p>
									<p>*數量有限 送完即止</p>
								</div>
							</div>
						</div>
						<div class="row hide">
							<div class="col-sm-6 img-wrapper">
								<img src="assets/img/offers_img_3.jpg">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>【幸福體 "貼"您需要】</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
									<p>由即日起至11月27號，凡於萬寧或屈臣氏購買任何【幸福醫藥】產品，即可以「環保價」$5換購【幸福環保袋】，既環保又實用，齊齊為地球出一分力啦</p>
									<p>&nbsp;</p>
									<p>詳情請查詢:</p>
									<p>萬寧客戶服務熱線 : 2299 3381</p>
									<p>屈臣氏客戶服務熱線 : 2608 8383</p>
									<p>&nbsp;</p>
									<p>*此優惠只適用於香港地區</p>
									<p>*數量有限 送完即止</p>
								</div>
							</div>
						</div>
						<div class="row hide">
							<div class="col-sm-6 img-wrapper">
								<img src="{{$GLOBALS['home_directory']}}assets/img/offers_img_3.jpg">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>【幸福體 "貼"您需要】</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
									<p>由即日起至11月27號，凡於萬寧或屈臣氏購買任何【幸福醫藥】產品，即可以「環保價」$5換購【幸福環保袋】，既環保又實用，齊齊為地球出一分力啦</p>
									<p>&nbsp;</p>
									<p>詳情請查詢:</p>
									<p>萬寧客戶服務熱線 : 2299 3381</p>
									<p>屈臣氏客戶服務熱線 : 2608 8383</p>
									<p>&nbsp;</p>
									<p>*此優惠只適用於香港地區</p>
									<p>*數量有限 送完即止</p>
								</div>
							</div>
						</div>
						<div class="row hide">
							<div class="col-sm-6 img-wrapper">
								<img src="assets/img/offers_img_3.jpg">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>【幸福體 "貼"您需要】</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
									<p>由即日起至11月27號，凡於萬寧或屈臣氏購買任何【幸福醫藥】產品，即可以「環保價」$5換購【幸福環保袋】，既環保又實用，齊齊為地球出一分力啦</p>
									<p>&nbsp;</p>
									<p>詳情請查詢:</p>
									<p>萬寧客戶服務熱線 : 2299 3381</p>
									<p>屈臣氏客戶服務熱線 : 2608 8383</p>
									<p>&nbsp;</p>
									<p>*此優惠只適用於香港地區</p>
									<p>*數量有限 送完即止</p>
								</div>
							</div>
						</div>
						<div class="row hide">
							<div class="col-sm-6 img-wrapper">
								<img src="{{$GLOBALS['home_directory']}}assets/img/offers_img_3.jpg">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>【幸福體 "貼"您需要】</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
									<p>由即日起至11月27號，凡於萬寧或屈臣氏購買任何【幸福醫藥】產品，即可以「環保價」$5換購【幸福環保袋】，既環保又實用，齊齊為地球出一分力啦</p>
									<p>&nbsp;</p>
									<p>詳情請查詢:</p>
									<p>萬寧客戶服務熱線 : 2299 3381</p>
									<p>屈臣氏客戶服務熱線 : 2608 8383</p>
									<p>&nbsp;</p>
									<p>*此優惠只適用於香港地區</p>
									<p>*數量有限 送完即止</p>
								</div>
							</div>
						</div>
						<div class="row hide">
							<div class="col-sm-6 img-wrapper">
								<img src="assets/img/offers_img_3.jpg">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>【幸福體 "貼"您需要】</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
									<p>由即日起至11月27號，凡於萬寧或屈臣氏購買任何【幸福醫藥】產品，即可以「環保價」$5換購【幸福環保袋】，既環保又實用，齊齊為地球出一分力啦</p>
									<p>&nbsp;</p>
									<p>詳情請查詢:</p>
									<p>萬寧客戶服務熱線 : 2299 3381</p>
									<p>屈臣氏客戶服務熱線 : 2608 8383</p>
									<p>&nbsp;</p>
									<p>*此優惠只適用於香港地區</p>
									<p>*數量有限 送完即止</p>
								</div>
							</div>
						</div>
						<div class="row hide">
							<div class="col-sm-6 img-wrapper">
								<img src="{{$GLOBALS['home_directory']}}assets/img/offers_img_3.jpg">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>【幸福體 "貼"您需要】</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
									<p>由即日起至11月27號，凡於萬寧或屈臣氏購買任何【幸福醫藥】產品，即可以「環保價」$5換購【幸福環保袋】，既環保又實用，齊齊為地球出一分力啦</p>
									<p>&nbsp;</p>
									<p>詳情請查詢:</p>
									<p>萬寧客戶服務熱線 : 2299 3381</p>
									<p>屈臣氏客戶服務熱線 : 2608 8383</p>
									<p>&nbsp;</p>
									<p>*此優惠只適用於香港地區</p>
									<p>*數量有限 送完即止</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 more-btn"><a href="javascript:void(0);"><span>顯示更多</span></a></div>
						<?php else:?>
						<div class="col-sm-12 no-content">

						<?php if($lang=='eng'):?>
							<a target="_blank" href="https://www.facebook.com/Fortune.Pharmacal">
						<img src="{{$GLOBALS['home_directory']}}assets/img/offers_notice_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/offers_banner_mobile_en.jpg" class="visible-xs">
					</a>
						<?php elseif($lang=='cht'):?>
							<a target="_blank" href="https://www.facebook.com/Fortune.Pharmacal">
						<img src="{{$GLOBALS['home_directory']}}assets/img/offers_notice.jpg" class="hidden-xs">
							<img src="{{$GLOBALS['home_directory']}}assets/img/offers_banner_mobile.jpg" class="visible-xs">
						</a>
						<?php else:?>
							<a target="_blank" href="http://weibo.com/fortunepharmacal">
						<img src="{{$GLOBALS['home_directory']}}assets/img/offers_notice_sc.jpg" class="hidden-xs">
							<img src="{{$GLOBALS['home_directory']}}assets/img/offers_banner_mobile_sc.jpg" class="visible-xs">
						</a>
						<?php endif;?>
							</a></div>
						<?php endif;?>
					</section>
				</div>
			</div>
		@include('layouts/footer')
		</div>
		<!-- Page Content -->
	</div>
</body>
</html>
