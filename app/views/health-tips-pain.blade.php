@include('global')
<?php
$page="health-tips-pain";
$lang_intro1="intro1_".$lang;
$lang_detail1="detail1_".$lang;
$lang_detail2="detail2_".$lang;
$lang_detail3="detail3_".$lang;
$lang_detail4="detail4_".$lang;
$lang_detail5="detail5_".$lang;
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head')
<body id="health-tips" class="pain">
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
								<p>{{$healthtipthrees[0]->$lang_intro1}}</p>
							</div>
							<div class="function-wrapper">
								<div class="function-left-wrapper col-sm-2 col-xs-12">
									<div class="function-btn active" rel="1"><p>{{$titles[1]}}</p></div>
									<div class="function-btn" rel="2"><p>{{$titles[2]}}</p></div>
									<div class="function-btn" rel="3"><p>{{$titles[3]}}<br/>{{$titles[4]}}</p></div>
								</div>
								<div class="function-middle-wrapper col-sm-8 col-xs-12">
									<img class="active" rel="1" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_4_bg_1.png">
									<img rel="2" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_4_bg_2.png">
									<img rel="3" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_4_bg_3.png">
									<!-- <img rel="4" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_4_bg_5.png"> -->
									<img rel="5" src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_4_bg_4.png">
								</div>
								<div class="function-right-wrapper col-sm-2 col-xs-12">
									<!-- <div class="function-btn" rel="4"><p>{{$titles[5]}}</p></div> -->
									<div class="function-btn" rel="5"><p>{{$titles[6]}}</p></div>
									<div class="function-btn function-logo"></div>
								</div>
							</div>
							<div class="detail-wrapper detail-wrapper2 function-detail-wrapper">
								<div class="detail-left-wrapper col-sm-3">
									<h4>{{$titles[0]}}</h4>
									<p>Detail</p>
								</div>
								<div class="detail-right-wrapper col-sm-9 active" rel="1">
								{{$healthtipthrees[0]->$lang_detail1}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="2">
									{{$healthtipthrees[0]->$lang_detail2}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="3">
									{{$healthtipthrees[0]->$lang_detail3}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="4">
								{{$healthtipthrees[0]->$lang_detail4}}
								</div>
								<div class="detail-right-wrapper col-sm-9" rel="5">
								{{$healthtipthrees[0]->$lang_detail5}}
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
