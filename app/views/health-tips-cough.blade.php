@include('global')
<?php
$page="health-tips-cough";
$lang_intro1="intro1_".$lang;
$lang_detail1="detail1_".$lang;
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head')
<body id="health-tips" class="cough">
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
								<p>{{$healthtipfours[0]->$lang_intro1}}</p>
							</div>
							<div class="function-wrapper">
								<div class="function-full-wrapper col-sm-12">

							<?php if($lang=='eng'):?>
							<img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_5_en.jpg">
							<?php elseif($lang=='cht'):?>
							<img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_5.jpg">
							<?php else:?>
							<img src="{{$GLOBALS['home_directory']}}assets/img/tips/trip_5_sc.jpg">
							<?php endif;?>
								</div>
							</div>
							<div class="detail-wrapper detail-wrapper2">
								<div class="detail-left-wrapper col-sm-3">
									<h4>{{$titles[0]}}</h4>
									<p>Detail</p>
								</div>
								<div class="detail-right-wrapper col-sm-9">
									{{$healthtipfours[0]->$lang_detail1}}
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
