@include('global') 
<?php 
$page="health-tips-gerd";

$lang_intro1="intro1_".$lang;

$lang_label1="label1_".$lang;
$lang_label2="label2_".$lang;
$lang_label3="label3_".$lang;
$lang_label4="label4_".$lang;
$lang_label5="label5_".$lang;
$lang_label6="label6_".$lang;
$lang_label7="label7_".$lang;	
$lang_label8="label8_".$lang;
$lang_label9="label9_".$lang;		

$lang_detail1="detail1_".$lang;
$lang_detail2="detail2_".$lang;
$lang_detail3="detail3_".$lang;
$lang_detail4="detail4_".$lang;
$lang_detail5="detail5_".$lang;
$lang_detail6="detail6_".$lang;
$lang_detail7="detail7_".$lang;
$lang_detail8="detail8_".$lang;
$lang_detail9="detail9_".$lang;

?>
<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="health-tips" class="gerd">
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
								<p>{{$healthtipsixp1s[0]->$lang_intro1}}</p>
							</div>
							<div class="function-wrapper">
								<div class="function-left-wrapper col-sm-2 hidden-xs">
									<div class="function-btn active" rel="1"><p>{{$titles[1]}}</p></div>
									<div class="function-btn" rel="2"><p>{{$titles[2]}}</p></div>
									<div class="function-btn" rel="3"><p>{{$titles[3]}}</p></div>
									<div class="function-btn" rel="4"><p>{{$titles[4]}}</p></div>
									<div class="function-btn" rel="5"><p>{{$titles[5]}}</p></div>
								</div>
								<div class="function-left-wrapper col-xs-12 visible-xs">
									<div class="function-btn active" rel="1"><p>{{$titles[1]}}</p></div>
									<div class="function-btn" rel="2"><p>{{$titles[2]}}</p></div>
									<div class="function-btn" rel="3"><p>{{$titles[3]}}</p></div>
								</div>
								<div class="function-middle-wrapper col-sm-8 col-xs-12">
									<img class="active" rel="1" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_8_lightbox_1.png">
									<img rel="2" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_8_lightbox_2.png">
									<img rel="3" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_8_lightbox_3.png">
									<img rel="4" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_8_lightbox_4.png">
									<img rel="5" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_8_lightbox_6.png">
									<img rel="6" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_8_lightbox_7.png">
									<img rel="7" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_8_lightbox_8.png">
									<img rel="8" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_8_lightbox_9.png">
									<img rel="9" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_8_lightbox_5.png">
									<p class="active" rel="1">{{$healthtipsixp2s[0]->$lang_label1}}</p>
									<p rel="2">{{$healthtipsixp2s[0]->$lang_label2}}</p>
									<p rel="3">{{$healthtipsixp2s[0]->$lang_label3}}</p>
									<p rel="4">{{$healthtipsixp2s[0]->$lang_label4}}</p>
									<p rel="5">{{$healthtipsixp2s[0]->$lang_label5}}</p>
									<p rel="6">{{$healthtipsixp3s[0]->$lang_label6}}</p>
									<p rel="7">{{$healthtipsixp3s[0]->$lang_label7}}</p>
									<p rel="8">{{$healthtipsixp3s[0]->$lang_label8}}</p>
									<p rel="9">{{$healthtipsixp3s[0]->$lang_label9}}</p>
								</div>
								<div class="function-right-wrapper col-sm-2 hidden-xs">
									<div class="function-btn" rel="6"><p>{{$titles[6]}}</p></div>
									<div class="function-btn" rel="7"><p>{{$titles[7]}}</p></div>
									<div class="function-btn" rel="8"><p>{{$titles[8]}}</p></div>
									<div class="function-btn" rel="9"><p>{{$titles[9]}}</p></div>
									<div class="function-btn function-logo"></div>
								</div>
								<div class="function-right-wrapper col-xs-12 visible-xs">
									<div class="function-btn" rel="4"><p>{{$titles[4]}}/p></div>
									<div class="function-btn" rel="5"><p>{{$titles[5]}}</p></div>
									<div class="function-btn" rel="6"><p>{{$titles[6]}}</p></div>
								</div>
								<div class="function-right-wrapper function-bottom-wrapper col-xs-12 visible-xs">
									<div class="function-btn" rel="7"><p>{{$titles[7]}}</p></div>
									<div class="function-btn" rel="8"><p>{{$titles[8]}}</p></div>
									<div class="function-btn" rel="9"><p>{{$titles[9]}}</p></div>
								</div>
							</div>
							<div class="detail-wrapper detail-wrapper2 function-detail-wrapper">
								<div class="detail-left-wrapper col-sm-3">
									<h4>{{$titles[0]}}</h4>
									<p>Detail</p>
								</div>
								<div class="detail-right-wrapper col-sm-9 active" rel="1">
								{{$healthtipsixp2s[0]->$lang_detail1}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="2">
									{{$healthtipsixp2s[0]->$lang_detail2}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="3">
									{{$healthtipsixp2s[0]->$lang_detail3}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="4">
									{{$healthtipsixp2s[0]->$lang_detail4}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="5">
								{{$healthtipsixp2s[0]->$lang_detail5}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="6">
									{{$healthtipsixp3s[0]->$lang_detail6}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="7">
								{{$healthtipsixp3s[0]->$lang_detail7}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="8">
									{{$healthtipsixp3s[0]->$lang_detail8}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="9">
									{{$healthtipsixp3s[0]->$lang_detail9}}
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



