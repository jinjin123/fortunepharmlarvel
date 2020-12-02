@include('global') 
<?php 
$page="contact-us";		
$website_lang="website_".$lang;
$content_lang="content_".$lang;
?>


<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="lastest-offers" class="contact-section contact-us">
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
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/contact_banner_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/contact_banner_mobile_en.jpg" class="visible-xs">
						<?php elseif($lang=='cht'):?>		
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/contact_banner.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/contact_banner_mobile.jpg" class="visible-xs">
						<?php else:?>	
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/contact_banner_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/contact_banner_mobile_sc.jpg" class="visible-xs">		
						<?php endif;?>	
					
					
					</section>
					<section id="offers-wrapper">
						<div class="">
							
							
							
							<!--Block 2-->
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-6 content-left">
									<div>
									<h3 style="font-family: 微軟正黑體, Microsoft JhengHei, 蘋果儷中黑, Apple LiGothic;">{{$titles[4]}}</h3>
										<p class="grey">HONG KONG & OVERSEAS MARKET</p>
									</div>
								</div>
								<div class="col-sm-6 col-xs-6 content-right"> 
									<ul> 
										<li><label>{{$titles[0]}}:</label>{{$hkcontacts[0]->phone}}</li>
										<li><label>{{$titles[1]}}:</label>{{$hkcontacts[0]->fax}}</li>
										<li><label>{{$titles[2]}}:</label> <a href="mailto:{{$hkcontacts[0]->email}}">{{$hkcontacts[0]->email}}</a></li>
										<li><label>{{$titles[3]}}:</label> <a target="_blank" href="http://www.fortunepharm.com">{{$hkcontacts[0]->$website_lang}}</a></li>
									</ul> 
								</div>
							</div>
							
							<!--Block 3-->
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-6 content-left">
									<div>
										<h3 style="font-family: 微軟正黑體, Microsoft JhengHei, 蘋果儷中黑, Apple LiGothic;">{{$titles[5]}}</h3>
										<p class="grey">CHINA MARKET</p>
									</div>
								</div>
								<div class="col-sm-6 col-xs-6 content-right">
									<ul>
										<li><label>{{$titles[0]}}:</label> {{$chinacontacts[0]->phone}}</li>
										<li><label>{{$titles[1]}}:</label> {{$chinacontacts[0]->fax}}</li>
										<li><label>{{$titles[2]}}:</label> <a href="mailto:{{$chinacontacts[0]->email}}">{{$chinacontacts[0]->email}}</a></li>
									</ul>
								</div>
							</div>
							
							<!--Block 4-->
							<div class="col-sm-6 content-wrapper with-image">
								<div class="col-sm-6 col-xs-6 content-left">
									<img src="{{$GLOBALS['home_directory']}}assets/img/content_img_2.png">
								</div>
								
								
								<div class="col-sm-6 col-xs-6 content-right">
									{{$jobs[0]->$content_lang}}
								</div>
							</div>
							
							<!--Block 1-->
							<div class="col-sm-6 img-wrapper">
								<img src="{{$GLOBALS['home_directory']}}assets/img/content_img_1.jpg">
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
