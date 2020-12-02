@include('global') 
<?php 
$page="news";		
$cursor_yr=max($yrs);

$title_lang="title_".$lang;
$desc_lang="desc_".$lang;
$img_lang="img1_".$lang;

$counter = 0;
foreach($newposts as $key => $newpost){
	if($newpost->popup) $counter++;
}

if($counter > 1){
	$counter = 0;
	foreach($newposts as $key => $newpost){
		if($newpost->popup) $counter++;
		if($counter > 1){
			$newpost->popup = false;
		}
	}
}
 
?>  

<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="news" class="contact-section">
	<a style="display:none" id="news-popup" href="{{$GLOBALS['home_directory']}}assets/img/news_popup.jpg" class="zoom-btn"><img src="{{$GLOBALS['home_directory']}}assets/img/news_popup.jpg"></a>
	<div rel="{{$GLOBALS['home_directory']}}" id="globalpath"></div>
	<div rel="{{$lang}}" id="lang"></div>
	<div rel="{{$page_num}}" id="current_page"></div>
	
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
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/news_banner_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/news_banner_mobile_en.jpg" class="visible-xs">	
						<?php elseif($lang=='cht'):?>		
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/news_banner.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/news_banner_mobile.jpg" class="visible-xs">
						<?php else:?>	
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/news_banner_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/news_banner_mobile_sc.jpg" class="visible-xs">		
						<?php endif;?>	
					</section>
					 
					<section id="news-wrapper">
						<?php $vaild1=1;?>    
						<?php $vaild2=0;?>
						<?php $vaild3=1;?>      
						<?php foreach ($newposts as $key => $newpost):?>   
				
						<?php if(substr($newpost->date,0,4) == $cursor_yr):?>
						
						
						<?php if ($vaild1):?>
						<div class="year-wrapper">
						<h3>{{$cursor_yr}}</h3>
						</div>
						<?php $vaild1=0;?>
						<?php endif;?>
						
					
							
							<?php if ($vaild3):?>
						    <div class="content-row active">
						   	<?php $vaild3=0;?>
						   	<?php else:?>
						   	<div class="content-row">
						   	<?php endif;?>
								<div class="col-xs-3 col-sm-2 colume1">
								{{substr($newpost->date,5,8)}}
								</div>
								<div class="col-xs-9 col-sm-10 colume2">
									<div class="title-wrapper">
										<h4>{{$newpost->$title_lang}}</h4>
										<a href="javascript:void(0);"></a>
									</div>
									<div class="content-wrapper">
										<div class="row">
											<div class="col-sm-8 text">
											{{$newpost->$desc_lang}}
											</div>
											<div class="col-sm-4 img">
												<?php if($newpost->popup): ?>
												<a href="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$newpost->$img_lang?$newpost->$img_lang:$newpost->img1_eng}}" class="zoom-btn fancybox_popup"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$newpost->$img_lang?$newpost->$img_lang:$newpost->img1_eng}}"></a>
												<?php else: ?>
												<a href="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$newpost->$img_lang?$newpost->$img_lang:$newpost->img1_eng}}" class="zoom-btn fancybox"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$newpost->$img_lang?$newpost->$img_lang:$newpost->img1_eng}}"></a>
												<?php endif; ?>
											</div>
										</div>    
									</div>
								</div>
							</div>
							<?php else:?>
							<?php $cursor_yr--;$vaild2=1;?>
							
							<?php if ($vaild2):?>
							<div class="year-wrapper">
							<h3>{{$cursor_yr}}</h3>
							</div>
							<?php $vaild2=0;?>
							<?php endif;?>
					
						   <div class="content-row">
								<div class="col-xs-3 col-sm-2 colume1">
								{{substr($newpost->date,5,8)}}
								</div>
								<div class="col-xs-9 col-sm-10 colume2">
									<div class="title-wrapper">
										<h4>{{$newpost->$title_lang}}</h4>
										<a href="javascript:void(0);"></a>
									</div>
									<div class="content-wrapper">
										<div class="row">
											<div class="col-sm-8 text">
											{{$newpost->$desc_lang}}
											</div>
											<div class="col-sm-4 img">
												<?php if($newpost->popup): ?>
												<a href="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$newpost->$img_lang?$newpost->$img_lang:$newpost->img1_eng}}" class="zoom-btn fancybox_popup"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$newpost->$img_lang?$newpost->$img_lang:$newpost->img1_eng}}"></a>
												<?php else: ?>
												<a href="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$newpost->$img_lang?$newpost->$img_lang:$newpost->img1_eng}}" class="zoom-btn fancybox"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$newpost->$img_lang?$newpost->$img_lang:$newpost->img1_eng}}"></a>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<?php endif;?>
							
							<?php endforeach;?>
						
							<div class="pagination-wrapper">
							
							<!-- Right Move -->
							<?php if($page_num=="0"):?>
							<?php else:?>	 
							<div rel="0" class="pagination-btn leftmove"> < </div>	 
							<?php endif;?>
							
							<!-- Center -->	 	 
							<!-- Start Case-->
							<?php $y=0;?>
							
							<?php if ($page_num==0):?>
							<?php for($x=0;$x<$newposts_length;$x=$x+10):?>	
							<?php if($y < 2 || $y==$max_page_num):?>
							<div  rel="{{$y}}" class="<?=$page_num==$y?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$y+1}}
							</div>
							<?php endif;?>
							<?php if($y==$max_page_num-1):?>
							<div class="pang-more">
							...  
							</div> 
							<?php endif;?>
							<?php $y++;?>
							<?php endfor;?> 
							<?php endif;?>
							
							<!-- Second Case-->  
							<?php if ($page_num==1 AND $max_page_num>2):?>
							<div  rel="0" class="<?=$page_num==0?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							1
							</div>
							<div  rel="1" class="<?=$page_num==1?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							2
							</div>
							<div  rel="2" class="<?=$page_num==2?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							3
							</div>
					 		<div class="pang-more">
							...       
							</div> 
							<div  rel="{{$max_page_num}}" class="<?=$page_num==2?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$max_page_num+1}}
							</div>
							<?php endif;?>
							
							<!-- Middle Case-->
							<?php $y=0;?>
							
							<?php if ($page_num!=0 AND $page_num!=1 AND $page_num!=$max_page_num AND $page_num!=$max_page_num-1 AND $max_page_num>2):?>
							<div  rel="0" class="<?=$page_num==0?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							1
							</div>
							<?php if($page_num>2):?>
							<div class="pang-more">
							...  
							</div> 
							<?php endif;?>
							<?php for($x=0;$x<$newposts_length;$x=$x+10):?>	
							<?php if($y!=0 AND $y!=$max_page_num AND $y==$page_num-1 OR $y==$page_num OR $y==$page_num+1):?>
							<div rel="{{$y}}" class="<?=$page_num==$y?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$y+1}}
							</div>
							<?php endif;?>
							<?php $y++;?>
							<?php endfor;?> 
							<?php if($page_num<$max_page_num-2):?>
					 		<div class="pang-more">
							...       
							</div> 
							<?php endif;?>
							<div  rel="{{$y-1}}" class="<?=$page_num==$y?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$y}}
							</div>
							<?php endif;?>
							                         
							             
							<!-- Last Second Case-->
							<?php if ($page_num==$max_page_num-1):?>
				     		<?php if($max_page_num>3):?>
							<div  rel="0" class="<?=$page_num==0?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							1
							</div> 
					 		<div class="pang-more">
							...       
							</div> 
							<?php endif;?>
							 <div  rel="{{$max_page_num-2}}" class="<?=$page_num==$max_page_num-2?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$max_page_num-1}}
							</div>
						    <div  rel="{{$max_page_num-1}}" class="<?=$page_num==$max_page_num-1?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$max_page_num}}
							</div>
							<div  rel="{{$max_page_num}}" class="<?=$page_num==$max_page_num?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$max_page_num+1}}
							</div>
							<?php endif;?>
						         
							             
							             
							             
							<!-- End Case-->
							<?php $y=0;?>
							<?php if ($page_num==$max_page_num AND $max_page_num>1):?>
							<div  rel="0" class="<?=$page_num==0?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							1
							</div>
							<div class="pang-more" >
							...  
							</div> 
							<?php for($x=0;$x<$newposts_length;$x=$x+10):?>	
							<?php if($y==$max_page_num-1|| $y==$max_page_num):?>
							<div  rel="{{$y}}" class="<?=$page_num==$y?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$y+1}}
							</div>
							<?php endif;?>
							<?php $y++;?>
							<?php endfor;?> 
							<?php endif;?>
							
					 				
							<!-- Left Move -->
							<?php if($page_num < $max_page_num):?>
							<div rel="{{$y-1}}" class="pagination-btn rightmove"> > </div>
							<?php else:?>	
							<?php endif;?>
							
							<!-- Selector -->
							<div class="pagination-btn with-select">
							<font style="padding:5pt;">{{$skip}}</font>
							<select class="pagination-change">			 
							<?php $y=0;?>
							<?php for($x=0;$x<$newposts_length;$x=$x+10):?>	
							<?php $y++;?>
							<option <?=$page_num==$y-1?"selected=true":"";?> value="{{$y}}">{{$y}}</option>
							<?php endfor;?>
							</select>     
							    
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