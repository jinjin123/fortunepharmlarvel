@include('global') 
<?php 
$page="faq";		
$name_faq="name_".$lang;
$lang_question="question_".$lang;
$lang_answer="answer_".$lang;

?>

<!DOCTYPE html>
<html lang="en" xmlns:wb="http://open.weibo.com/wb">
@include('layouts/head') 
<body id="faq">
	
	<!-- FB SDK -->
	
		<script>
 		window.fbAsyncInit = function() {
    	FB.init({
      	appId      : '105148586494382',
      	xfbml      : true,
      	version    : 'v2.3'
    	});
  		};

  	 (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
	</script>
	


	
	
	<div id="wrapper">
		@include('layouts/sidebar')
		<!-- Page Content -->
		<div id="page-content-wrapper">
			@include('layouts/header')
			<div id="main">
				<div class="container-fluid">
					<section id="banner-wrapper">
						<?php if($lang=='eng'):?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/faq_banner_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/faq_banner_mobile_en.jpg" class="visible-xs">	
						<?php elseif($lang=='cht'):?>		
								<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/faq_banner.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/faq_banner_mobile.jpg" class="visible-xs">
						<?php else:?>	
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/faq_banner_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/faq_banner_mobile_sc.jpg" class="visible-xs">		
						<?php endif;?>	
					</section>
					<section id="faq-wrapper">
						<div class="sub-tab-session">
							<div class="sub-tab-outer-wrapper scroll-wrapper">
								<ul class="sub-tab-wrapper nav navbar-nav">
									<li class=<?=$series_tab==0?"active":""?>> <a href="{{$GLOBALS['home_directory']}}{{$lang}}/faq/0">{{$all_title}}</a></li>		
									<?php $x=1;?> 
									<?php foreach($faqseries as $faqserie):?>
									<li class=<?=$series_tab==$faqserie->id?"active":""?>> <a href="{{$GLOBALS['home_directory']}}{{$lang}}/faq/{{$faqserie->id}}">{{$faqserie->$name_faq}}</a></li>		
									<?php $x++;?>
									<?php endforeach;?>
								</ul>
							</div>
							<a class="arrow arrow-right"></a>
						</div>
						<div class="content-outer-wrapper">
							
							<?php $x=1;?>
							<?php foreach($faqs as $faq):?>
							<?php if($x<7):?>
							<div class="content-wrapper col-sm-4 col-xs-6">
							<?php else:?>	
							<div class="content-wrapper col-sm-4 col-xs-6 hide">	
							<?php endif;?>
								<div class="img-wrapper"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/medium/{{$faq->img}}"></div>
								<div class="text-wrapper">
									<p class="grey">{{$faq->$lang_question}}</p>
									<a class="detail" href="javascript:void(0);" rel="{{$faq->id}} ">{{$detail_btn_txt}}</a>
									<a id="langname" href="javascript:void(0);" rel="{{$lang}}"></a>
									<a id="homedir" href="javascript:void(0);" rel="{{$GLOBALS['home_directory']}}"></a>
									
								</div>
							</div>
							<?php $x++;?>
							<?php endforeach;?>
							
							<div class="detail-wrapper">
								<div class="img-wrapper"><img src=""></div>
								<div class="text-wrapper">
									<h4></h4>
									<div class="share-wrapper">
									<!--<div>{{$btn_share_txt}} : </div>-->
									<!--<div class="facebook-share"></div>	-->
									<a class="fb-share"  href="javascript:void(0);" target="_blank">
									<div class="pluginButton">
											<div>
											<div class="pluginButtonContainer">
												<div class="pluginButtonImage">
													<button type="submit" title="分享">
														<i class="pluginButtonIcon img sp_plugin-button sx_plugin-button_favblue"></i>
														</button>
														</div>
														<span class="pluginButtonLabel">{{$btn_share_txt}}</span>
											</div>    
											</div>
										         
									</div>
									</a>          
									<div id="wb-btn">
								
									</div>
									<!--
									<wb:share-button id="wb_publish" appkey="424597837"  addition="simple" type="button" language="zh_tw" class="wb-share"></wb:share-button>
									-->
									
									<wb:publish id="wb_publish"  class="wb-share" button_text="{{$btn_share_txt}}" button_size="middle"></wb:publish>
								
								
									</div>                   
								
									<div class="description"></div>
									<a class="detail" href="javascript:void(0);">X {{$btn_close_txt}}</a>
								</div>
							</div> 
						</div>
						<?php if(sizeof($faqs) < 7):?>
						
						<?php else:?>
						<div class="col-sm-12 more-btn"><a href="javascript:void(0);"><span>{{$btn_more_txt}}</span></a></div>
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



