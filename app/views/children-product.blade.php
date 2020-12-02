@include('global') 
<?php 
$page="children-product";
$img_lang="img_".$lang;

if (!isset($market_tab)){
	$market_tab='hongkong';
}
if (!isset($series_tab)){
	$series_tab=1;
}
if (!isset($product_tab)){
	$product_tab=0;
}

if (!isset($products)){
$products=DB::table('products')->where('markets_id', 1)->where('series_id', 8)->get();	
}


//from product_take page ?
if(isset($redirect_product)){
$products=[];
$products=DB::table('products')->where('id', $redirect_product)->get();	
}

//Fill "http://" Left banner
if($banner1->linktype=='ex'){
if ($banner1->link AND substr($banner1->link,0,1) != "/" AND substr($banner1->link,0,4) != "http"){
$banner1->link="http://".$banner1->link;
				}
}
elseif ($banner1->linktype=='in'){
$banner1->link=$GLOBALS['home_directory'].$lang."/".$banner1->link;
}
		
//Fill "http://" Right banner
if($banner2->linktype=='ex'){
if ($banner2->link AND substr($banner2->link,0,1) != "/" AND substr($banner2->link,0,4) != "http"){
$banner2->link="http://".$banner2->link;
				}
}
elseif ($banner2->linktype=='in'){
$banner2->link=$GLOBALS['home_directory'].$lang."/".$banner2->link;
}

if($products[$product_tab]->id == 36 || 
	$products[$product_tab]->id == 37 ||
	$products[$product_tab]->id == 38 ||
	$products[$product_tab]->id == 39) {
		$details = $details_title_china;
		if($lang === 'cht') $reg_num_label = '中華人民共和國生產許可證編號';
		else if($lang === 'chs') $reg_num_label = '中华人民共和国生产许可证编号';
	} else {
		$details = $details_title;
	}

	
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="product" class="children">
	<div id="wrapper">
		@include('layouts/sidebar') 
		<!-- Page Content -->
		<div id="page-content-wrapper">
			@include('layouts/header') 
			<div id="main">
				<div class="container-fluid">
					<section id="banner-wrapper">
						<?php if($lang=='eng'):?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/child_banner_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/child_banner_mobile_en.jpg" class="visible-xs">	
						<?php elseif($lang=='cht'):?>		
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/child_banner.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/child_banner_mobile.jpg" class="visible-xs">	
						<?php else:?>	
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/child_banner_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/child_banner_mobile_sc.jpg" class="visible-xs">		
						<?php endif;?>	
						
						
					</section>
					<section id="product-tab">
						<ul class="market-tab-wrapper nav navbar-nav">
						<li class=<?=$market_tab=='hongkong'?"active":""?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/children-product/hongkong/8/0">{{$marketname[0]}}</a></li>
						<li class=<?=$market_tab=='china'?"active":""?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/children-product/china/14/0">{{$marketname[1]}}</a></li>
					    <li class=<?=$market_tab=='oversea'?"active":""?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/children-product/oversea/15/0">{{$marketname[2]}}</a></li>
						</ul>
						
						<div class="sub-tab-session">
							<div class="sub-tab-outer-wrapper scroll-wrapper">
								<ul class="sub-tab-wrapper nav navbar-nav">
									<?php $x=0;?>
									<?php foreach ($seriesids as $sid):?> 
									<li class=<?=$series_tab==$sid?"active":""?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/children-product/{{$market_tab}}/{{$sid}}/0">{{$series_data_name[$x]}} </a></li>
									<?php $x++;?>
									<?php endforeach;?> 
									<?php if($market_tab=='hongkong'):?>
									<li><a href="{{$GLOBALS['home_directory']}}{{$lang}}/product-healthcare">{{$healthcare_menu_title}}</a></li>
									<?php endif; ?>
								</ul>
							</div>
							<a class="arrow arrow-right"></a>
						</div>
						<div class="tab-icon-outer-wrapper scroll-wrapper">
							<ul class="tab-icon-wrapper nav navbar-nav">
								<?php $x=0;?>
								<?php foreach ($products as $product):?>
								<li><a href="{{$GLOBALS['home_directory']}}{{$lang}}/children-product/{{$market_tab}}/{{$series_tab}}/{{$x}}"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/full/{{$product->product_img1}}"></a></li>
								<?php $x++;?>
								<?php endforeach;?>
							</ul>
						</div>
					</section>
					<section id="product-wrapper" class="row">
						<div class="col-xs-10 col-sm-6 product-big-image">
							<!--<img src="{{$GLOBALS['home_directory']}}assets/img/product/product_450.png"/>-->
							<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/full/{{$products[$product_tab]->product_img1}}"/>
							<a href="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/medium/{{$products[$product_tab]->product_img1}}" class="zoom-btn fancybox"></a>
						</div>
						
						
						<div class="col-xs-2 col-sm-1 product-small-image">
							<font class="package-title">{{$package_title}}</font>
							<?php if ($products[$product_tab]->product_img1):?>
							<a href="javascript:void(0);" rel="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/medium/{{$products[$product_tab]->product_img1}}" fancyboxdata="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/medium/{{$products[$product_tab]->product_img1}}"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/small/{{$products[$product_tab]->product_img1}}"/></a>
							<?php endif;?>
							<?php if ($products[$product_tab]->product_img2):?>
							<a href="javascript:void(0);" rel="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/medium/{{$products[$product_tab]->product_img2}}" fancyboxdata="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/medium/{{$products[$product_tab]->product_img2}}"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/small/{{$products[$product_tab]->product_img2}}"/></a>
							<?php endif;?>	
							<?php if ($products[$product_tab]->product_img3):?>
							<a href="javascript:void(0);" rel="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/medium/{{$products[$product_tab]->product_img3}}" fancyboxdata="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/medium/{{$products[$product_tab]->product_img3}}"><img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/small/{{$products[$product_tab]->product_img3}}"/></a>
							<?php endif;?>
						</div>
						<div class="col-xs-12 col-sm-5 product-description">
						
							<h2 class="purple"><?php if($lang=='eng'){echo $products[$product_tab]->name_eng;} if($lang=='cht'){echo $products[$product_tab]->name_cht;} if($lang=='chs'){echo $products[$product_tab]->name_chs;}?></h2>
							<h3><?php if($lang=='eng'){echo $products[$product_tab]->short_desc_eng;} if($lang=='cht'){echo $products[$product_tab]->short_desc_cht;} if($lang=='chs'){echo $products[$product_tab]->short_desc_chs;}?></h3>
							<ul>
						<?php if($lang=='eng'){echo $products[$product_tab]->desc_eng;} if($lang=='cht'){echo $products[$product_tab]->desc_cht;} if($lang=='chs'){echo $products[$product_tab]->desc_chs;}?>
							</ul>
						</div>
					</section>
					<section id="product-content-wrapper" class="row">
						<div class="col-sm-3 product-detail">
							<div class="product-detail-wrapper1">
								<h4 class="purple">{{$detail}}</h4>
								<p class="grey">Detail</p>
							</div>
							<div class="product-detail-wrapper2">
								<p class="grey"><?php if($products[$product_tab]->reg_num !== ''){ echo $reg_num_label; } else { echo ''; }  ?><?php echo $products[$product_tab]->reg_num; ?></p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 product-content-tab-wrapper scroll-wrapper">
							<ul>
								<li class="active" rel="1"><a href="javascript:void(0);" class="grey">{{$details[0]}}</a></li>
								<li rel="2"><a href="javascript:void(0);" class="grey">{{$details[1]}}</a></li>
								<li rel="3"><a href="javascript:void(0);" class="grey">{{$details[2]}}</a></li>
								<li rel="4"><a href="javascript:void(0);" class="grey">{{$details[3]}}</a></li>
								<li rel="5"><a href="javascript:void(0);" class="grey">{{$details[4]}}</a></li>
								<li rel="6"><a href="javascript:void(0);" class="grey">{{$details[5]}}</a></li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 product-content-wrapper product-content1">
							<ul>
							<?php if($lang=='eng'){echo $products[$product_tab]->pack_size_eng;} if($lang=='cht'){echo $products[$product_tab]->pack_size_cht;} if($lang=='chs'){echo $products[$product_tab]->pack_size_chs;}?>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 product-content-wrapper product-content2">
							<p>{{$indication_caption}}</p>
							<ul>
							<?php foreach ($indicationsnames as $indicationname):?>	
							<li>{{$indicationname}}</li>	
							<?php endforeach;?>
						   	</ul>
						   	
						   	<font>{{$indication_remark}}</font>
					
						</div>
						<div class="col-xs-12 col-sm-6 product-content-wrapper product-content3">
						<?php if($lang=='eng'){echo $products[$product_tab]->administration_eng;} if($lang=='cht'){echo $products[$product_tab]->administration_cht;} if($lang=='chs'){echo $products[$product_tab]->administration_chs;}?>

						</div>
						<div class="col-xs-12 col-sm-6 product-content-wrapper product-content4">
							<ul>
								<?php if($lang=='eng'){echo $products[$product_tab]->ingredient_eng;} if($lang=='cht'){echo $products[$product_tab]->ingredient_cht;} if($lang=='chs'){echo $products[$product_tab]->ingredient_chs;}?>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 product-content-wrapper product-content5">
							<ul>
						<?php if($lang=='eng'){echo $products[$product_tab]->caution_eng;} if($lang=='cht'){echo $products[$product_tab]->caution_cht;} if($lang=='chs'){echo $products[$product_tab]->caution_chs;}?>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-6 product-content-wrapper product-content6">
							<ul>
						<?php if($lang=='eng'){echo $products[$product_tab]->storage_eng;} if($lang=='cht'){echo $products[$product_tab]->storage_cht;} if($lang=='chs'){echo $products[$product_tab]->storage_chs;}?>
							</ul>
						</div>
					</section>
					
					<section id="product-more-wrapper" class="row">
				 			<div class="col-xs-12 col-sm-6">
							<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$banner1-> $img_lang}}">
				
							<div class="info-label"><?php $swlang="name_".$lang; echo $banner1-> $swlang; ?></div>
							<div class="info">
								<p><?php $swlang="desc_".$lang; echo $banner1-> $swlang; ?></p>
									<a target="<?=$banner1->linktype=="ex"?'_blank':'_self';?>"  
									href="{{$banner1->link}}" class="more purple">{{$more}} >
									</a>
							</div>
						</div>
						
						<div class="col-xs-12 col-sm-6">
							<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$banner2-> $img_lang}}">
							<div class="info-label"><?php $swlang="name_".$lang; echo $banner2-> $swlang; ?></div>
							<div class="info">
								<p><?php $swlang="desc_".$lang; echo $banner2-> $swlang; ?></p>
									<a target="<?=$banner2->linktype=="ex"?'_blank':'_self';?>"  
									href="{{$banner2->link}}" class="more purple">{{$more}} >
									</a>
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