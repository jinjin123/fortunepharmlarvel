@include('global') 
<?php 
$page="product-healthcare";	
?>
<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="product" class="children healthcare">
	<div id="wrapper">
		@include('layouts/sidebar') 
		<!-- Page Content -->
		<div id="page-content-wrapper">
			@include('layouts/header') 
			<div id="main">
				<div class="container-fluid">
					<section id="banner-wrapper">
						<img src="{{$GLOBALS['home_directory']}}assets/img/child_banner.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/product_banner_mobile.jpg" class="visible-xs">
					</section>
					<section id="product-tab">
						<ul class="market-tab-wrapper nav navbar-nav">
							<li class="active"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/children-product/hongkong/8/0">{{$marketname[0]}}</a></li>
						<li ><a href="{{$GLOBALS['home_directory']}}{{$lang}}/children-product/china/14/0">{{$marketname[1]}}</a></li>
					    <li ><a href="{{$GLOBALS['home_directory']}}{{$lang}}/children-product/oversea/15/0">{{$marketname[2]}}</a></li>
				
						</ul>
						<div class="sub-tab-outer-wrapper scroll-wrapper">
							<ul class="sub-tab-wrapper nav navbar-nav">
								
									<?php $x=8;?> 
									<?php foreach ($seriesnames as $seriename):?> 
									<li><a href="javascript:document.location.replace('{{$GLOBALS['home_directory']}}{{$lang}}/children-product/hongkong/{{$x}}/0');">{{$seriename}} </a></li>
									<?php $x++;?> 
									<?php endforeach;?> 
									
									<li class="active"><a href="product-healthcare"> {{$healthcare_menu_title}}</a></li>
						
							</ul>
						</div>
					</section>
					<section id="product-wrapper" class="row">
						<?php foreach ($healthcares as $healthcare):?>
						<div class="col-xs-12 col-sm-6 healthcare-wrapper">
							<div class="image-wrapper">
								<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/full/{{$healthcare->product_img}}"/>
								<a href="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/full/{{$healthcare->product_img}}" class="zoom-btn fancybox"></a>
							</div>
							<div class="content-wrapper">
								<h2 class="purple"><?php $product_name='name_'.$lang; echo $healthcare->$product_name;?></h2>
								<h3><?php $short_desc='short_desc_'.$lang; echo $healthcare->$short_desc;?></h3>
								<ul><?php $desc='desc_'.$lang; echo $healthcare->$desc;?></ul>
							</div>
						</div>
						<?php endforeach;?>
						<div class="col-xs-12 col-sm-12 healthcare-btn"><a href="http://www.fp-healthcare.com" target="_blank">> {{$more}} www.fp-healthcare.com</a></div>
					</section>
				</div>
			</div>
				@include('layouts/footer') 
		</div>
		<!-- Page Content -->
	</div>
</body>
</html>