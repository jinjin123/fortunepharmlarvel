@include('../global') 
<?php


	$menus= Menu::all();
	
	if ($lang == "en"){
	foreach ($menus as $menu)
	{
	$name[]=$menu->name;
	
	}
	}else{
	foreach ($menus as $menu)
	{
	$name[]=$menu->name_ch;
	}	
	}
?>


<nav id="nav">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <ul id="lang_mobile" class="navbar-toggle">
        	
              	<?php if($page=='home'):?>
				 <li ><a href="en" class=<?=($lang == 'en')?'active':'';?>>ENG</a></li>
				 <li ><a href="cn" class=<?=($lang == 'cn')?'active':'';?>>中文</a></li>
			
				 
				 <?php elseif($page=='contact-list'):?>
	
				 <li class=<?=($lang == 'en')?'active':'';?>><a href="{{$GLOBALS['home_directory']}}en/contact-list?location={{$_GET['location']}}">ENG</a></li>
				 <li class=<?=($lang == 'cn')?'active':'';?>><a href="{{$GLOBALS['home_directory']}}cn/contact-list?location={{$_GET['location']}}">中文</a></li>
		 
				 <?php else :?>
				 <li class=<?=($lang == 'en')?'active':'';?>><a href="{{$GLOBALS['home_directory']}}en/{{$page}}">ENG</a></li>
				 <li class=<?=($lang == 'cn')?'active':'';?>><a href="{{$GLOBALS['home_directory']}}cn/{{$page}}">中文</a></li>
				<?php endif;?>
            
            <li><a href="http://miradry-japan.org/">日本語</a></li>
            <li><a href="https://www.facebook.com/miraDryKorea/info?tab=overview">한국의</a></li>
        </ul>
        <div class="collapse navbar-collapse" id="nav-menu">
            <ul class="nav navbar-nav">
                <li class=<?=($page == 'home')?'active':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}"><?php echo $name[0];?></a></li>
                 <li class=<?=($page == 'about')?'active':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/about"><?php echo $name[1];?></a></li>
                 <li class=<?=($page == 'procedure-info')?'active':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/procedure-info"><?php echo $name[2];?></a></li>
                <li class=<?=($page == 'faq')?'active':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/faq"><?php echo $name[3];?></a></li>
                 <li class=<?=($page == 'success-stories' or $page == 'testimonial')?'active':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/success-stories"><?php echo $name[4];?></a></li>
                <li class=<?=($page == 'contact')?'active':'';?>><a href="{{$GLOBALS['home_directory']}}{{$lang}}/contact"><?php echo $name[5];?></a></li>

            </ul>
        </div>
    </div>
</nav>