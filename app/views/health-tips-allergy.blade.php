@include('global')
<?php
$page="health-tips-allergy";
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
$lang_label8="label8_".$lang;
$lang_label9="label9_".$lang;
$lang_label10="label10_".$lang;


$lang_detail2="detail2_".$lang;
$lang_detail3="detail3_".$lang;
$lang_detail4="detail4_".$lang;
$lang_detail5="detail5_".$lang;
$lang_detail6="detail6_".$lang;
$lang_detail7="detail7_".$lang;
$lang_detail8="detail8_".$lang;
$lang_detail9="detail9_".$lang;
$lang_detail10="detail10_".$lang;
$lang_detail11="detail11_".$lang;
?>


<!DOCTYPE html>
<html lang="en">
@include('layouts/head')
<body id="health-tips" class="allergy">
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
								<p>{{$healthtipfivep1s[0]->$lang_intro1}}</p>
							</div>
							<div class="function-wrapper">
								<div class="function-full-wrapper col-sm-12">


						<?php if($lang=='eng'):?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_6_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_6_bg_en.jpg" class="visible-xs">
						<?php elseif($lang=='cht'):?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_6.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_6_bg.jpg" class="visible-xs">
						<?php else:?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_6_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_6_bg_sc.jpg" class="visible-xs">
						<?php endif;?>
								</div>
							</div>
							<div class="detail-wrapper detail-wrapper2">
								<div class="detail-left-wrapper col-sm-3">
									<h4>{{$titles[0]}}</h4>
									<p>Detail</p>
								</div>
								<div class="detail-right-wrapper col-sm-9">
									{{$healthtipfivep1s[0]->$lang_detail1}}

								</div>
							</div>
							<div class="notice-wrapper">
								<p>{{$healthtipfivep1s[0]->$lang_intro2}}</p>
							</div>
							<div class="function-wrapper">
								<div class="function-tab-wrapper col-sm-12 col-xs-12">
									<div class="function-tab-btn active" rel="a">{{$titles[1]}}</div>
									<div class="function-tab-btn" rel="b">{{$titles[2]}}</div>
									<div class="function-tab-btn" rel="c">{{$titles[3]}}</div>
								</div>
								<div class="function-left-wrapper col-sm-2 col-xs-12 active hidden-xs" rel="a">
									<div class="function-btn active" rel="1"><p>{{$titles[4]}}</p></div>
									<div class="function-btn" rel="2"><p>{{$titles[5]}}</p></div>
									<div class="function-btn" rel="3"><p>{{$titles[6]}}</p></div>
									<div class="function-btn" rel="4"><p>{{$titles[7]}}</p></div>
								</div>
								<div class="function-left-wrapper col-sm-2 col-xs-12 hidden-xs" rel="b">
									<div class="function-btn" rel="5"><p>{{$titles[8]}}</p></div>
									<div class="function-btn" rel="6"><p>{{$titles[9]}}</p></div>
									<div class="function-btn" rel="7"><p>{{$titles[10]}}</p></div>
									<div class="function-btn function-logo"></div>
								</div>
								<div class="function-left-wrapper col-sm-2 col-xs-12 hidden-xs" rel="c">
									<div class="function-btn" rel="8"><p>{{$titles[11]}}</p></div>
									<div class="function-btn" rel="9"><p>{{$titles[12]}}</p></div>
									<div class="function-btn" rel="10"><p>{{$titles[13]}}</p></div>
									<div class="function-btn function-logo"></div>
								</div>
								<div class="function-middle-wrapper col-sm-8 col-xs-12">
									<p class="active" rel="1">{{$healthtipfivep2s[0]->$lang_label1}}</p>
									<p rel="2">{{$healthtipfivep2s[0]->$lang_label2}}</p>
									<p rel="3">{{$healthtipfivep2s[0]->$lang_label3}}</p>
									<p rel="4">{{$healthtipfivep2s[0]->$lang_label4}}</p>
									<p rel="5">{{$healthtipfivep3s[0]->$lang_label5}}</p>
									<p rel="6">{{$healthtipfivep3s[0]->$lang_label6}}</p>
									<p rel="7">{{$healthtipfivep3s[0]->$lang_label7}}</p>
									<p rel="8">{{$healthtipfivep4s[0]->$lang_label8}}</p>
									<p rel="9">{{$healthtipfivep4s[0]->$lang_label9}}</p>
									<p rel="10">{{$healthtipfivep4s[0]->$lang_label10}}</p>
									<img class="active" rel="1" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_7_bg_1_1.png">
									<img rel="2" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_7_bg_1_2.png">
									<img rel="3" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_7_bg_1_3.png">
									<img rel="4" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_7_bg_1_4.png">
									<img rel="5" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_7_bg_2_1.png">
									<img rel="6" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_7_bg_2_2.png">
									<img rel="7" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_7_bg_2_3.png">
									<img rel="8" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_7_bg_3_1.png">
									<img rel="9" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_7_bg_3_2.png">
									<img rel="10" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_7_bg_3_3.png">
								</div>
								<div class="function-right-wrapper col-sm-2 col-xs-12 active" rel="a">
									<div class="function-btn active" rel="1"><p>{{$healthtipfivep2s[0]->$lang_label1}}</p></div>
									<div class="function-btn" rel="2"><p>{{$healthtipfivep2s[0]->$lang_label2}}</p></div>
									<div class="function-btn" rel="3"><p>{{$healthtipfivep2s[0]->$lang_label3}}</p></div>
									<div class="function-btn" rel="4"><p>{{$healthtipfivep2s[0]->$lang_label4}}</p></div>
								</div>
								<div class="function-right-wrapper col-sm-2 col-xs-12" rel="b">
									<div class="function-btn" rel="5"><p>{{$healthtipfivep3s[0]->$lang_label5}}</p></div>
									<div class="function-btn" rel="6"><p>{{$healthtipfivep3s[0]->$lang_label6}}</p></div>
									<div class="function-btn" rel="7"><p>{{$healthtipfivep3s[0]->$lang_label7}}</p></div>
								</div>
								<div class="function-right-wrapper col-sm-2 col-xs-12" rel="c">
									<div class="function-btn" rel="8"><p>{{$healthtipfivep4s[0]->$lang_label8}}</p></div>
									<div class="function-btn" rel="9"><p>{{$healthtipfivep4s[0]->$lang_label9}}</p></div>
									<div class="function-btn" rel="10"><p>{{$healthtipfivep4s[0]->$lang_label10}}</p></div>
								</div>
							</div>
							<div class="detail-wrapper detail-wrapper2 function-detail-wrapper">
								<div class="detail-left-wrapper col-sm-3">
									<h4>{{$titles[0]}}</h4>
									<p>Detail</p>
								</div>
								<div class="detail-right-wrapper col-sm-9 active" rel="1">
								{{$healthtipfivep2s[0]->$lang_detail2}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="2">
										{{$healthtipfivep2s[0]->$lang_detail3}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="3">
								{{$healthtipfivep2s[0]->$lang_detail4}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="4">
									{{$healthtipfivep2s[0]->$lang_detail5}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="5">
								{{$healthtipfivep3s[0]->$lang_detail6}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="6">
								{{$healthtipfivep3s[0]->$lang_detail7}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="7">
							{{$healthtipfivep3s[0]->$lang_detail8}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="8">
								{{$healthtipfivep4s[0]->$lang_detail9}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="9">
							{{$healthtipfivep4s[0]->$lang_detail10}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="10">
								{{$healthtipfivep4s[0]->$lang_detail11}}
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
