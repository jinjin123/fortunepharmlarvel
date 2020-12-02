		@include('global') 
		
		<?php 
		if($lang=='eng'){
		$menu_titles=['Cold and Flu','Children'."'".'s Cold and Flu','Pain & Fever','Phlegm & Cough','Allergy','Heartburn','Stomach'];
		}elseif ($lang=='cht'){
		$menu_titles=['傷風感冒','兒童傷風感冒','鎮痛退熱','痰及咳嗽','過敏及敏感','火燒心','胃氣'];
		}else{
		$menu_titles=['伤风感冒','儿童伤风感冒','镇痛退热','痰及咳嗽','过敏及敏感','火烧心','胃气'];
		}
		?>
		
		
		
		
		
		<li class="<?=$page=='health-tips'?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/health-tips">{{$menu_titles[0]}}</a></li>
	    <li class="<?=$page=='health-tips-children'?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/health-tips-children">{{$menu_titles[1]}}</a></li>
		<li class="<?=$page=='health-tips-pain'?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/health-tips-pain">{{$menu_titles[2]}}</a></li>
		<li class="<?=$page=='health-tips-cough'?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/health-tips-cough">{{$menu_titles[3]}}</a></li>
		<li class="<?=$page=='health-tips-allergy'?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/health-tips-allergy">{{$menu_titles[4]}}</a></li>
		<li class="<?=$page=='health-tips-gerd'?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/health-tips-gerd">{{$menu_titles[5]}}</a></li>
		<li class="<?=$page=='health-tips-bloating'?"active":""?>"><a href="{{$GLOBALS['home_directory']}}{{$lang}}/health-tips-bloating">{{$menu_titles[6]}}</a></li>