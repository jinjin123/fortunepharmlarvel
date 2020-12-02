@include('../global')
<?php
$menus=Menu::all();
$linkageicons=Linkageicon::all();
// var_dump($menus);
$mlang="name_".$lang;
$link = "link_".$lang;


?>



<header id="header" class="navbar">
	<div class="container-fluid">
		<div class="container-fluid-40">
			<div class="navbar-header">
				<a href="{{$GLOBALS['home_directory']}}{{$lang}}/home" id="logo" class="navbar-brand"><img src="{{$GLOBALS['home_directory']}}assets/img/logo.jpg" alt="logo"></a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse">
				<ul id="nav-bar" class="nav navbar-nav">
					<li class="<?=$page=='home'?"active":""?>"> <a href="{{$GLOBALS['home_directory']}}{{$lang}}/home">{{$menus[0]->$mlang;}}</a></li>
					<li class="<?=$page=='company-history' || $page=='factory-intro' || $page=='news' || $page=='latest-offers' || $page=='charity-fund' || $page=='advertisements'|| $page=='contact-us' ?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/company-history">{{$menus[5]->$mlang}}</a></li>
					<li class="<?=$page=='product'?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/product/hongkong/1/0">{{$menus[1]->$mlang}}</a></li>
					<li class="<?=$page=='product_take'?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/product_take">{{$menus[2]->$mlang}}</a></li>
					<li class="<?=$page=='faq'?"active":""?>" ><a href="{{$GLOBALS['home_directory']}}{{$lang}}/faq/0">{{$menus[3]->$mlang}}</a></li>
					<li class="<?=$page=='health-tips' || $page=='health-tips-children' || $page=='health-tips-pain' || $page=='health-tips-cough' || $page=='health-tips-allergy' || $page=='health-tips-gerd' || $page=='health-tips-bloating'?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/health-tips">{{$menus[4]->$mlang}}</a></li>
					<li class="<?=$page=='other-services' ?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/other-services">{{$menus[12]->$mlang}}</a></li>
				</ul>
				<div class="navbar-middle">
					<ul id="linkage-icon" class="nav navbar-nav">
					<?php foreach ($linkageicons as $key => $linkageicon): ?>
						<?php if(strlen($linkageicon->img) != 0): ?>
						<li class="icon-list-item"><a href="{{$linkageicon->$link}}" target="_blank"><img class="linkage-icon-img" src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$linkageicon->img}}"></a></li>
						<?php endif ?>
					<?php endforeach; ?>
					</ul>
				</div>
				<div class="navbar-right">
					<ul id="lang" class="nav navbar-nav">
						<?php if($page=='product'):?>
						<li class=<?=$lang=='cht'?"active":""?>><a href="{{$GLOBALS['home_directory']}}cht/{{$page}}/{{$market_tab}}/{{$series_tab}}/{{$product_tab}}">繁</a></li>
						<li class=<?=$lang=='chs'?"active":""?>><a href="{{$GLOBALS['home_directory']}}chs/{{$page}}/{{$market_tab}}/{{$series_tab}}/{{$product_tab}}">簡</a></li>
						<li class=<?=$lang=='eng'?"active":""?>><a href="{{$GLOBALS['home_directory']}}eng/{{$page}}/{{$market_tab}}/{{$series_tab}}/{{$product_tab}}">ENG</a></li>
						<?php elseif($page=='children-product'):?>
						<li class=<?=$lang=='cht'?"active":""?>><a href="{{$GLOBALS['home_directory']}}cht/{{$page}}/{{$market_tab}}/{{$series_tab}}/{{$product_tab}}">繁</a></li>
						<li class=<?=$lang=='chs'?"active":""?>><a href="{{$GLOBALS['home_directory']}}chs/{{$page}}/{{$market_tab}}/{{$series_tab}}/{{$product_tab}}">簡</a></li>
						<li class=<?=$lang=='eng'?"active":""?>><a href="{{$GLOBALS['home_directory']}}eng/{{$page}}/{{$market_tab}}/{{$series_tab}}/{{$product_tab}}">ENG</a></li>
						<?php elseif($page=='faq'):?>
						<li class=<?=$lang=='cht'?"active":""?>><a href="{{$GLOBALS['home_directory']}}cht/{{$page}}/{{$series_tab}}">繁</a></li>
						<li class=<?=$lang=='chs'?"active":""?>><a href="{{$GLOBALS['home_directory']}}chs/{{$page}}/{{$series_tab}}">簡</a></li>
						<li class=<?=$lang=='eng'?"active":""?>><a href="{{$GLOBALS['home_directory']}}eng/{{$page}}/{{$series_tab}}">ENG</a></li>
						<?php elseif($page=='news'):?>
						<li class=<?=$lang=='cht'?"active":""?>><a href="{{$GLOBALS['home_directory']}}cht/{{$page}}/0">繁</a></li>
						<li class=<?=$lang=='chs'?"active":""?>><a href="{{$GLOBALS['home_directory']}}chs/{{$page}}/0">簡</a></li>
						<li class=<?=$lang=='eng'?"active":""?>><a href="{{$GLOBALS['home_directory']}}eng/{{$page}}/0">ENG</a></li>
						<?php elseif($page=='advertisements'):?>
						<li class=<?=$lang=='cht'?"active":""?>><a href="{{$GLOBALS['home_directory']}}cht/{{$page}}/0">繁</a></li>
						<li class=<?=$lang=='chs'?"active":""?>><a href="{{$GLOBALS['home_directory']}}chs/{{$page}}/0">簡</a></li>
						<li class=<?=$lang=='eng'?"active":""?>><a href="{{$GLOBALS['home_directory']}}eng/{{$page}}/0">ENG</a></li>
						<?php else:?>
						<li class=<?=$lang=='cht'?"active":""?>><a href="{{$GLOBALS['home_directory']}}cht/{{$page}}">繁</a></li>
						<li class=<?=$lang=='chs'?"active":""?>><a href="{{$GLOBALS['home_directory']}}chs/{{$page}}">簡</a></li>
						<li class=<?=$lang=='eng'?"active":""?>><a href="{{$GLOBALS['home_directory']}}eng/{{$page}}">ENG</a></li>
						<?php endif;?>
					</ul>
					<ul id="social-icon" class="nav navbar-nav">
					<li><a href="https://www.facebook.com/Fortune.Pharmacal" target="_blank" class="fb-icon"></a></li>
					<li><a href="http://weibo.com/fortunepharmacal" target="_blank" class="weibo-icon"></a></li>
					<li><a href="https://www.youtube.com/user/FortunePharmHK" target="_blank" class="youtube-icon"></a></li>
					</ul>
				</div>
			</nav>
			<button type="button" class="hamburger is-closed visible-xs" data-toggle="offcanvas">
				<span class="hamb-top"></span>
				<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
			</button>
		</div>
	</div>
</header>
