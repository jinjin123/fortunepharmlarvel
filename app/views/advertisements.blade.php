@include('global')
<?php
$page="advertisements";
$title_lang="title_".$lang;
$desc_lang="desc_".$lang;

?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head')
<body id="advertisements" class="contact-section">
	<div rel="{{$GLOBALS['home_directory']}}" id="globalpath"></div>
	<div rel="{{$lang}}" id="lang"></div>
	<div rel="{{$cursor_yr}}" id="cursor_yr"></div>
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
						<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$introadvertisment[0]->img_eng}}" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$introadvertisment[0]->img_mobile_eng}}" class="visible-xs">
						<?php elseif($lang=='cht'):?>
						<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$introadvertisment[0]->img_cht}}" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$introadvertisment[0]->img_mobile_cht}}" class="visible-xs">
						<?php else:?>
						<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$introadvertisment[0]->img_chs}}" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$introadvertisment[0]->img_mobile_chs}}" class="visible-xs">
						<?php endif;?>


					</section>
					<section id="advertisements-wrapper">
						<div class="advertisements-top">
							<div class="col-sm-6 video">
								<?php if($lang=='eng' || $lang=='cht' && $advertisment_cursor_yrs[0]->youtube):?>
								<iframe id="video-player" width="400" height="300" src="https://www.youtube.com/embed/{{$advertisment_cursor_yrs[0]->youtube}}" frameborder="0" allowfullscreen></iframe>
								<?php endif;?>
								<?php if($lang=='chs' && $advertisment_cursor_yrs[0]->youkou) :?>
								<iframe height="300" width="400" src="http://player.youku.com/embed/{{$advertisment_cursor_yrs[0]->youkou}}" frameborder=0 allowfullscreen></iframe>
								<?php endif;?>
								<?php if($lang=='chs' && !($advertisment_cursor_yrs[0]->youkou)) :?>
								<iframe id="video-player" width="400" height="300" src="https://www.youtube.com/embed/{{$advertisment_cursor_yrs[0]->youtube}}" frameborder="0" allowfullscreen></iframe>
								<?php endif;?>
							</div>
							<div class="col-xs-6 col-sm-3 content1">
								<h3>{{$advertisment_cursor_yrs[0]->$title_lang}}</h3>
								發佈日期:<p class="grey"> {{$advertisment_cursor_yrs[0]->date}}</p>
							</div>
							<div class="col-xs-6 col-sm-3 content2">
								<p class="grey">{{$advertisment_cursor_yrs[0]->$desc_lang}}</p>
							</div>
						</div>


						<!-- Pagination Desktop-->

						<div class="pagination-wrapper">
							<div class="page_chage_custom">

							<!-- Left Move -->
							<?php if($page_num=="0"):?>
							<?php elseif ($amount_of_page >= 3):?>
							<div class="pagination-btn leftmove"> < </div>
							<?php endif;?>


							<!-- Center -->
							<!-- Start Case-->
							<?php $y=0;?>
							<?php if ($page_num==0 && $amount_of_page >= 3):?>
							<?php for($x=0;$x<$max_page_num;$x++):?>
							<?php if($y < 2 || $y==$max_page_num):?>
							<div  rel="{{$y}}" class="<?=$page_num==$y?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[$y]}}
							</div>
							<?php endif;?>
							<?php if($y==$max_page_num-1 AND $amount_of_page >= 3):?>
							<div class="pang-more">
							...
							</div>
							<div  rel="{{$max_page_num-1}}" class="<?=$page_num==$y?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[$max_page_num-1]}}
							</div>
							<?php endif;?>
							<?php $y++;?>
							<?php endfor;?>
							<?php endif;?>

							<!-- Second Case-->
							<?php if ($page_num==1 AND $amount_of_page >= 3):?>
							<div  rel="0" class="<?=$page_num==0?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[0]}}
							</div>
							<div  rel="1" class="<?=$page_num==1?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[1]}}
							</div>
							<?php if($amount_of_page >= 4):?>
							<div  rel="2" class="<?=$page_num==2?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[2]}}
							</div>
							<?php endif;?>
					 		<div class="pang-more">
							...
							</div>
							<div  rel="{{$max_page_num-1}}" class="<?=$page_num==2?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[$max_page_num-1]}}
							</div>
							<?php endif;?>


							<!-- Middle Case-->
							<?php $y=0;?>
							<?php if ($page_num!=0 AND $page_num!=1 AND $page_num!=$max_page_num-1 AND $page_num!=$max_page_num-2):?>
							<div  rel="0" class="<?=$page_num==0?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[0]}}
							</div>
							<?php if($page_num>2):?>
							<div class="pang-more">
							...
							</div>
							<?php endif;?>
							<?php for($x=0;$x<$max_page_num;$x++):?>
							<?php if($y!=0 AND $y!=$max_page_num AND $y==$page_num-1 OR $y==$page_num OR $y==$page_num+1):?>
							<div rel="{{$y}}" class="<?=$page_num==$y?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[$y]}}
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
							{{$yrs[$y-1]}}
							</div>
							<?php endif;?>


							<!-- Last Second Case-->
							<?php if ($page_num==$max_page_num-2 AND $amount_of_page >= 3):?>

							<div  rel="0" class="<?=$page_num==0?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[0]}}
							</div>
					 		<div class="pang-more">
							...
							</div>
							 <div  rel="{{$max_page_num-3}}" class="<?=$page_num==$max_page_num-3?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[$max_page_num-3]}}
							</div>
						    <div  rel="{{$max_page_num-2}}" class="<?=$page_num==$max_page_num-2?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[$max_page_num-2]}}
							</div>
							<div  rel="{{$max_page_num-1}}" class="<?=$page_num==$max_page_num-1?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[$max_page_num-1]}}
							</div>
							<?php endif;?>



							<!-- End Case-->
							<?php $y=0;?>
							<?php if ($page_num==$max_page_num-1 AND $amount_of_page >= 3):?>
							<div  rel="0" class="<?=$page_num==0?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[0]}}
							</div>
							<div class="pang-more" >
							...
							</div>
						    <div  rel="{{$max_page_num-2}}" class="<?=$page_num==$y?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[$max_page_num-2]}}
							</div>

							<?php for($x=0;$x<$max_page_num;$x++):?>
							<?php if($y==$max_page_num-1|| $y==$max_page_num):?>
							<div  rel="{{$y}}" class="<?=$page_num==$y?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[$y]}}
							</div>
							<?php endif;?>
							<?php $y++;?>
							<?php endfor;?>
							<?php else:?>
							<?php endif;?>


							<!-- Exceptional Case :: Less than 3 yrs-->
							<?php if($amount_of_page == 2):?>
							<div  rel="0" class="<?=$page_num==0?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[0]}}
							</div>
							<div  rel="1" class="<?=$page_num==1?"pagination-btn withmovebutt active":"pagination-btn withmovebutt";?>">
							{{$yrs[1]}}
							</div>
							<?php endif;?>

							<!-- Right Move -->
							<?php if($page_num < $max_page_num-1 AND $amount_of_page >= 3):?>
							<div class="pagination-btn rightmove"> > </div>
							<?php else:?>
							<?php endif;?>





							<!-- Selector -->
							<div class="pagination-btn with-select">
								<font style="padding:5pt;">{{$skip}}</font>
								<select class="pagination-change">
									<?php $x=0;?>
									<?php foreach ($yrs as $yr):?>
									<option <?=$x==$cursor_yr?"selected":"";?> value="{{$x}}">{{$yr}}</option>
									<?php $x++;?>
									<?php endforeach;?>
								</select>

							</div>
						</div>
							</div>


						<div class="video-outer-wrapper">
						<?php $x=0;?>
						<?php foreach ($advertisment_cursor_yrs as $advertisment_cursor_yr):?>
							<div class="col-xs-6 col-sm-3 video-wrapper">
								<div class="image">
									<div class="image-inner">
										<img src="{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/{{$advertisment_cursor_yr->img1}}" />

									</div>
								</div>
								<a href="javascript:void(0);" class="play-btn view-video" rel="{{$advertisment_cursor_yr->id}}"><span></span></a>
								<div class="content">
									<p>{{$advertisment_cursor_yr->$title_lang}}</p>
									<a href="javascript:void(0); "class="view-video" rel="{{$advertisment_cursor_yr->id}}">{{$watch}}</a>

								</div>
							</div>
							<?php $x++;?>
							<?php endforeach;?>
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
