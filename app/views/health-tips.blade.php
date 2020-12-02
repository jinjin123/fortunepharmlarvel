@include('global') 
<?php 
$page="health-tips";	
$lang_intro1="intro1_".$lang;
$lang_detail1="detail1_".$lang;
$lang_intro2="intro2_".$lang;

$lang_label1="label1_".$lang;
$lang_label2="label2_".$lang;
$lang_label3="label3_".$lang;
$lang_label4="label4_".$lang;
$lang_label5="label5_".$lang;
$lang_label6="label6_".$lang;
$lang_label7="label7_".$lang;

$lang_detail2="detail2_".$lang;
$lang_detail3="detail3_".$lang;
$lang_detail4="detail4_".$lang;
$lang_detail5="detail5_".$lang;
$lang_detail6="detail6_".$lang;
$lang_detail7="detail7_".$lang;
$lang_detail8="detail8_".$lang;
?>
<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="health-tips" class="cold_and_flu">
	<div id="wrapper">
		@include('layouts/sidebar')
		<!-- Page Content -->
		<div id="page-content-wrapper">
			@include('layouts/header')
			<div id="main">
				<div class="container-fluid">
					<section id="banner-wrapper">
						<?php if($lang=='eng'):?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/trips_banner_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/trips_banner_mobile_en.jpg" class="visible-xs">	
						<?php elseif($lang=='cht'):?>		
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/trips_banner.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/trips_banner_mobile.jpg" class="visible-xs">
						<?php else:?>	
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/trips_banner_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/trips_banner_mobile_sc.jpg" class="visible-xs">		
						<?php endif;?>	
					
					</section>
					<section id="tips-wrapper">
						<div class="sub-tab-session">
							<div class="sub-tab-outer-wrapper scroll-wrapper">
								<ul class="sub-tab-wrapper nav navbar-nav">
								@include('layouts/healthtipsmenubar')
								</ul>
							</div>
							<a class="arrow arrow-left"></a>
							<a class="arrow arrow-right"></a>
						</div>
						<div class="content-outer-wrapper">
							<div class="notice-wrapper">
								<p>{{$healthtiponep1s[0]->$lang_intro1}}</p>
							</div>
							<div class="image-wrapper">
								
						 <?php if($lang=='eng'):?>
						 <img src="{{$GLOBALS['home_directory']}}assets/img/tips/tips_1_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/tips/tips_1_bg_en.jpg" class="visible-xs">
						<?php elseif($lang=='cht'):?>		
						<img src="{{$GLOBALS['home_directory']}}assets/img/tips/tips_1.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/tips/tips_1_bg.jpg" class="visible-xs">
						<?php else:?>	
						 <img src="{{$GLOBALS['home_directory']}}assets/img/tips/tips_1_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/tips/tips_1_bg_sc.jpg" class="visible-xs">
						<?php endif;?>	
							</div>
							<div class="detail-wrapper detail-wrapper1">
								<div class="detail-left-wrapper col-sm-3">
									<h4>{{$titles[0]}}</h4>
									<p>Detail</p>
								</div>
								<div class="detail-right-wrapper col-sm-9">
								{{$healthtiponep1s[0]->$lang_detail1}}
								</div>
							</div>
							<div class="notice-wrapper">
								<p>{{$healthtiponep1s[0]->$lang_intro2}}</p>
							</div>
							<div class="function-wrapper">
								<div class="function-left-wrapper col-sm-2 col-xs-12">
									<div class="function-btn active" rel="1"><img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_1.png"><p class="healthtips-right-col">{{$titles[1]}}</p></div>
									<div class="function-btn" rel="2"><img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_2.png"><p class="healthtips-right-col">{{$titles[2]}}</p></div>
									<div class="function-btn" rel="3"><img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_3.png"><p class="healthtips-right-col">{{$titles[3]}}</p></div>
									<div class="function-btn" rel="4"><img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_4.png"><p class="healthtips-right-col">{{$titles[4]}}</p></div>
								</div>
								<div class="function-middle-wrapper col-sm-8 col-xs-12">
									<p class="active" rel="1">{{$healthtiponep2s[0]->$lang_label1}}</p>
									<p rel="2">{{$healthtiponep2s[0]->$lang_label2}}</p>
									<p rel="3">{{$healthtiponep2s[0]->$lang_label3}}</p>      
									<p rel="4">{{$healthtiponep2s[0]->$lang_label4}}</p>
									<p  rel="5">{{$healthtiponep3s[0]->$lang_label5}}</p>
									<p  rel="6">{{$healthtiponep3s[0]->$lang_label6}}</p>
									<p rel="7">{{$healthtiponep3s[0]->$lang_label7}}</p>
									<img class="active" rel="1" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_bg_1.png">
									<img rel="2" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_bg_2.png">
									<img rel="3" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_bg_2.png">
									<img rel="4" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_bg_4.png">
									<img rel="5" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_bg_5.png">
									<img rel="6" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_bg_6.png">
									<img rel="7" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_bg_7.png">
								</div>
								<div class="function-right-wrapper col-sm-2 col-xs-12">
									<div class="function-btn" rel="5"><img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_5.png"><p class="healthtips-left-col">{{$titles[5]}}</p></div>
									<div class="function-btn" rel="6"><img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_6.png"><p class="healthtips-left-col">{{$titles[6]}}</p></div>
									<div class="function-btn" rel="7"><img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_2_7.png"><p class="healthtips-left-col">{{$titles[7]}}</p></div>
									<div class="function-btn function-logo"></div>
								</div>
							</div>
							<div class="detail-wrapper detail-wrapper2 function-detail-wrapper">
								<div class="detail-left-wrapper col-sm-3">
									<h4>{{$titles[0]}}</h4>
									<p>Detail</p>
								</div>
								<div class="detail-right-wrapper col-sm-9 active" rel="1">
								{{$healthtiponep2s[0]->$lang_detail2}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="2">
								{{$healthtiponep2s[0]->$lang_detail3}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="3">
								{{$healthtiponep2s[0]->$lang_detail4}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="4">
								{{$healthtiponep2s[0]->$lang_detail5}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="5">
								{{$healthtiponep3s[0]->$lang_detail6}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="6">
								{{$healthtiponep3s[0]->$lang_detail7}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="7">
								{{$healthtiponep3s[0]->$lang_detail8}}
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
				@include('layouts/footer')
		</div>
		<!-- Page Content -->
	</div>
</body>
</html>







