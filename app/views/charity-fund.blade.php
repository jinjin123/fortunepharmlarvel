@include('global') 
<?php 
$page="charity-fund";
$content_lang="content_".$lang;	
$json_lang=json_encode($lang);

if(!in_array($firstYear, $pureYears)) $firstYear = $pureYears[0];
if(!in_array($secondYear, $pureYears)) $secondYear = $pureYears[1];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
    <!--<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">-->
    <title>Fortune Pharmacal Co., Ltd.</title>
        {{ HTML::style('assets/css/bootstrap-3.3.1/css/bootstrap.css');}}
        {{ HTML::style('assets/css/bootstrap-9.css');}}
		{{ HTML::style('assets/js/fancybox/jquery.fancybox.css');}}
        {{ HTML::style('assets/css/sidebar.css');}}
        {{ HTML::style('assets/js/timeline/css/timeline.css');}}
        {{ HTML::style('assets/css/style.css');}}
        <?php if ($lang=='cht' ||$lang=='chs'):?>
    	{{ HTML::style('assets/css/cn.css');}}
    	<?php else:?>
    	{{ HTML::style('assets/css/en.css');}}
		<?php endif;?>
     
		{{ HTML::script('assets/js/jquery-1.11.2.js') }}
    	{{ HTML::script('assets/css/bootstrap-3.3.1/js/bootstrap.min.js') }}
		{{ HTML::script('assets/js/fancybox/jquery.fancybox.js') }}
    	{{ HTML::script('assets/js/jquery.nicescroll.min.js') }} 
        {{ HTML::script('assets/js/timeline/javascript/timeline.js') }}
    	{{ HTML::script('assets/js/script.js') }}
		{{ HTML::script('assets/js/lodash.js') }}
    <!--[if lt IE 9]>
    {{ HTML::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}
    {{ HTML::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}
    <![endif]-->
    <script type="text/javascript">

		var timeline_data=[];
		var firstYear = '';
		var secondYear = '';
			
		function changeYear(passInYear){
			var selectedYear = passInYear ? passInYear : $('#year-drop-down').val();
			var finalRes = [];
			_.forEach(timeline_data, function(o){
				var year = _.split(o.date, '-')[0];
				if(_.toString(year) === _.toString(selectedYear)){
					finalRes.push(o);
				}
			});
			var currentYear = selectedYear;
			if(_.toString(currentYear) === _.toString(firstYear)) $('#first-year').addClass('active');
			else $('#first-year').removeClass('active');
			if(_.toString(currentYear) === _.toString(secondYear)) $('#second-year').addClass('active');
			else $('#second-year').removeClass('active');

			$('#year-drop-down').val(selectedYear);

			$('#fund-timeline').empty();
            timeline = new Timeline($('#fund-timeline'), finalRes);
            timeline.setOptions({
            	dateFormat: 		 'YYYY-MM',
                animation:           true,
                lightbox:            true,
                columnMode:          'dual',
                order:               'desc',
                separator:           'null',
                first_separator:     true,
                responsive_width:    768
            });
            timeline.display();
		}

        $(document).ready(function() {
			firstYear = <?=$firstYear?>;
			secondYear = <?=$secondYear?>;
        	var charList = <?=$charList?>;
     		var json_lang = <?=$json_lang?>;
     		var title_lang="title_"+json_lang;  
			var zoom_in_detail_lang="zoom_in_detail_"+json_lang;  	
        	var imgString = '';
        	 for (var i in charList) {
        	 var imgs=[];
        	 var content="";   
             for (var x = 1; x < 21; x++) {
   			 if(charList[i]["img"+x]){
					imgString += "<div style='margin: 2% 2% 8% 2%;'><img style='border-radius: 5px; max-height:100%; max-width:100%;' src={{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/"+charList[i]['img'+x]+"/></div>"
   			 		imgs.push('{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/'+charList[i]["img"+x] );
   				 } 
             }
			if(_.size(charList[i][zoom_in_detail_lang]) && !_.size(imgs))
				content = "<a href='#charity-light-box" + i + "' class='fancybox'><span id='charity-fund-title'>" + charList[i][title_lang] + "</span></a><div class='charity_popup_dialog' id='charity-light-box" + i + "' style='display: none'><span class='charity_popup_date'>" + charList[i]["date"].substring(0, 7) + "</span><br><br><span id='charity-fund-detail'>" + charList[i][zoom_in_detail_lang] + "</span></div>";
			else if(_.size(charList[i][zoom_in_detail_lang]) && _.size(imgs))
    			content = "<a href='#charity-light-box" + i + "' class='fancybox'><span id='charity-fund-title'>" + charList[i][title_lang] + "</span></a><div class='charity_popup_dialog' id='charity-light-box" + i + "' style='display: none'><span class='charity_popup_date'>" + charList[i]["date"].substring(0, 7) + "</span><div style='margin-top:2%' class='row'>	" + imgString + "</div><span id='charity-fund-detail'>" + charList[i][zoom_in_detail_lang] + "</span></div>";
			else {
				content = charList[i][title_lang];
			}

			timeline_data[i]=
			{
			type:'blog_post',
			date:charList[i]["date"].substring(0, 7),
			title:charList[i]["date"].substring(0, 7),
			content:content,
			images:imgs
			   };   

   			}

			changeYear(firstYear);
			
			if($('.fancybox').length > 0)
				$(".fancybox").fancybox();
			});
    </script>
</head>
<body id="charity-fund" class="contact-section" class="contact-section">
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
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/charity_banner_en.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/charity_banner_mobile_en.jpg" class="visible-xs">	
						<?php elseif($lang=='cht'):?>		
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/charity_banner.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/charity_banner_mobile.jpg" class="visible-xs">
						<?php else:?>	
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/charity_banner_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/charity_banner_mobile_sc.jpg" class="visible-xs">		
						<?php endif;?>	
					
					</section>
					<section id="fund-wrapper">
						<div class="fund-text">
							{{$charityintros[0]->$content_lang}}
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4 col-xs-offset-0 col-sm-offset-2 col-md-offset-2" >
							<div onclick="changeYear({{$firstYear}})" rel="{{$firstYear}}" id="first-year" class="pagination-btn withmovebutt">
							{{$firstYear}}
							</div>
							<div onclick="changeYear({{$secondYear}})" rel="{{$secondYear}}" id="second-year" class="pagination-btn withmovebutt">
							{{$secondYear}}
							</div>
							<!-- Selector -->
							<div class="pagination-btn with-select">
								<select id="year-drop-down" onchange="changeYear()" class="pagination-change">			 
									<?php for($x=0;$x<$pureYearsLength;$x++):?>	
									<option value="{{$pureYears[$x]}}">{{$pureYears[$x]}}</option>
									<?php endfor;?>
								</select>   
							</div>
						</div>
						<br>
						<div id="fund-timeline"></div>
					</section>
					

				</div>
			</div>
			@include('layouts/footer')
		</div>
		<!-- Page Content -->
	</div>
</body>
</html>