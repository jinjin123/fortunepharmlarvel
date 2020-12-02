@include('global') 
<?php 
$page="latest-offers";		
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
						<?php if(1):?>
						<?php $x=0;?>
						<?php foreach ($offers as $offer):?>	
						<?php if ($x<3):?>
						<div class="row">
						<?php else :?>	
						<div class="row hide">
						<?php endif;?>
							<div class="col-sm-6 img-wrapper">
								
								<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/full/{{$offer->img1}}">
							</div>
							<div class="col-sm-6 content-wrapper">
								<div class="col-sm-6 col-xs-12 content-left">
									<h3>{{$offer->$lang_title}}</h3>
								</div>
								<div class="col-sm-6 col-xs-12 content-right">
								{{$offer->$lang_desc}}
								</div>
							</div>
						</div>
						<?php $x++;?>
						<?php endforeach;?>
						
						<?php if(sizeof($offers)>3):?>
						<div class="col-sm-12 more-btn"><a href="javascript:void(0);"><span>{{$more}}</span></a></div>
						<?php endif;?>
						
						<?php else:?>
						<div class="col-sm-12 no-content"><img src="assets/img/offers_notice.jpg"></div>
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