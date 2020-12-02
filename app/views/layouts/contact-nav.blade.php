@include('../global') 
<?php 
$menus=Menu::all();
$mlang="name_".$lang;
?>

<nav id="contact-nav" class="container-fluid hidden-xs">
	<div class="container-fluid-125">
		<ul class="nav navbar-nav">
			<li<?=($page == 'company-history')?' class="active"':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/company-history"><?php echo $menus[6]->$mlang;?></a></li>
			<li<?=($page == 'factory-intro')?' class="active"':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/factory-intro"><?php echo $menus[13]->$mlang;?></a></li>
			<li<?=($page == 'news')?' class="active"':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/news/0"><?php echo $menus[7]->$mlang;?></a></li>
			<li<?=($page == 'latest-offers'||$page == 'latest-offers2')?' class="active"':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/latest-offers"><?php echo $menus[8]->$mlang;?></a></li>
			<li<?=($page == 'charity-fund')?' class="active"':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/charity-fund"><?php echo $menus[9]->$mlang;?></a></li>
			<li<?=($page == 'advertisements')?' class="active"':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/advertisements/0"><?php echo $menus[10]->$mlang;?></a></li>
			<li<?=($page == 'contact-us')?' class="active"':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/contact-us"><?php echo $menus[11]->$mlang;?></a></li>
		</ul>
	</div>
</nav>