@include('global') 
<?php
$page="product_take";	
$lang_symptom='indication_'.$lang;
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="product-take">
	<div id="wrapper">
			@include('layouts/sidebar')
		<!-- Page Content -->
		<div id="page-content-wrapper">
				@include('layouts/header')
			<div id="main">
				<div class="container-fluid">
					<section id="banner-wrapper">
					
						<?php if($lang=='eng'):?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/which_banner_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/which_banner_mobile_en.jpg" class="visible-xs">	
						<?php elseif($lang=='cht'):?>		
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/which_banner.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/which_banner_mobile.jpg" class="visible-xs">	
						<?php else:?>	
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/which_banner_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/which_banner_mobile_sc.jpg" class="visible-xs">		
						<?php endif;?>	
					</section>
					<section id="product-take-wrapper">
						<div class="title-wrapper">
							<h3>{{$title1}}</h3>
							<p class="grey">{{$title2}}</p>
						</div>
						<div class="content-wrapper">
							<div class="content-left">
								<a id="langname" href="javascript:void(0);" rel="{{$lang}}"></a>
								<a id="globalpath" href="javascript:void(0);" rel="{{$GLOBALS['home_directory']}}"></a>
								<?php $i=0;?>
								<?php foreach ($fixed_symptoms as $fixed_symptom):?>
									<?php $i++;?>
									<?php if($i == 10):?>
										<div class="col-sm-2 col-xs-4 row-sm-12-2 row-xs-4 nopadding">
											<div class="index-wrapper">
												<div class="logo-wrapper">
												</div>
											</div>
										</div>
									<?php endif;?>
									<div class="col-sm-2 col-xs-4 row-sm-12-2 row-xs-4 nopadding">
										<div class="index-wrapper">
											<a href="javascript:void(0);" class="wrapper wrapper{{$i}}" rel="{{$i}}">
												<span>{{$fixed_symptom->$lang_symptom}}</span>
												
											</a>
										</div>
									</div>
								<?php endforeach;?>
								<div class="col-sm-4 col-xs-12 nopadding">
									<div class="index-wrapper">
										<a href="javascript:void(0);" class="result">{{$search_btn_txt}}</a>
										<a href="javascript:void(0);" class="clear-select">{{$clear_select_txt}}</a>
									</div>
								</div>
							</div>
							<div class="content-right">
								<div class="index-wrapper">
									<!--
									<div class="level-wrapper">
										<?php if($lang == "eng"):?>
										<p class="level1">Onset</p>
										<p class="level2">Slight</p>
										<p class="level3">Critical</p>
										<?php elseif($lang == "cht"):?>
										<p class="level1">初發</p>
										<p class="level2">輕微</p>
										<p class="level3">嚴重</p>
										<?php elseif($lang == "chs"):?>
										<p class="level1">初發</p>
										<p class="level2">輕微</p>
										<p class="level3">嚴重</p>
										<?php endif;?>
									</div>
									-->
									<div class="matched-outer">
										<div class="matched-product-wrapper">
										</div>
									</div>
									<div class="arrow arrow-up"></div>
									<div class="arrow arrow-down"></div>
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