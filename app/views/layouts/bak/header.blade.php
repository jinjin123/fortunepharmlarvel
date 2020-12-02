@include('../global') 
<header id="top" class="navbar">
    <div class="container">
        <div class="navbar-header">  
            <a href="{{ URL::to($lang)}}" id="logo" class="navbar-brand">{{ HTML::image('assets/img/logo.png')}}</a>
        </div>
            <ul id="lang" class="nav navbar-nav navbar-right collapse navbar-collapse">
            	<!-- IF $PAGE == HOME , EMPTY PATH -->
            	<!-- ELSE KEEP IT -->
            	
            	
            	
            	 <?php if($page=='home'):?>
				 <li class=<?=($lang == 'en')?'active':'';?>><a href="en">ENG</a></li>
				 <li class=<?=($lang == 'cn')?'active':'';?>><a href="cn">中文</a></li>
			
				 
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
            <ul id="top-icon" class="nav navbar-nav navbar-right">
                <li><a class="fb-icon" href="#"></a></li>
            </ul>
    </div>
</header>


