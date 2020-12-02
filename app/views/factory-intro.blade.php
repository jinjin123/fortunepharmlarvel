@include('global')
<?php

$page="factory-intro";
$content_lang="content_".$lang;
$json_lang=json_encode($lang);
$seo="香港卫生署、香港制造、GMP药厂生产、无副作用、安全的感冒药";
?>


<!DOCTYPE html>
<html lang="en">
	<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="{{$seo}}">
	<meta name="description" content="">
	<meta name="author" content="">
    <!--<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">-->
    <title>Fortune Pharmacal Co., Ltd.</title>
	{{ HTML::style('assets/css/bootstrap-3.3.1/css/bootstrap.css');}}
    {{ HTML::style('assets/css/bootstrap-9.css');}}
    {{ HTML::style('assets/css/sidebar.css');}}
    {{ HTML::style('assets/js/timeline/css/timeline.css');}}
    {{ HTML::style('assets/css/style.css');}}

     <?php if ($lang=='cht' ||$lang=='chs'):?>
    {{ HTML::style('assets/css/cht.css');}}
    <?php else:?>
    {{ HTML::style('assets/css/eng.css');}}
	<?php endif;?>

    {{ HTML::script('assets/js/jquery-1.11.2.js') }}
    {{ HTML::script('assets/css/bootstrap-3.3.1/js/bootstrap.min.js') }}
	{{ HTML::script('assets/js/lodash.js') }}
    {{ HTML::script('assets/js/jquery.nicescroll.min.js') }}
	{{ HTML::script('assets/js/timeline/javascript/timeline.js') }}
    {{ HTML::script('assets/js/script.js') }}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="factory-intro" class="contact-section">


	    <script type="text/javascript">
        $(document).ready(function() {

     		var hisList = <?=$hisList?>;
     		var json_lang = <?=$json_lang?>;
     		var title_lang="title_"+json_lang;
        	var timeline_data=[];

             for (var i in hisList) {
        	 var imgs=[];
        	 var content="";
             for (var x = 1; x < 21; x++) {
   			 if(hisList[i]["img"+x]){
   			 imgs.push('{{$GLOBALS['home_directory']}}app/storage/uploads/thumbs/'+hisList[i]["img"+x] );
   				 }
             }

             if(json_lang=="eng" && hisList[i]["youtube"]||json_lang=="cht" && hisList[i]["youtube"]){
   			 content=hisList[i][title_lang]+'<a href="https://www.youtube.com/watch?v='+hisList[i]["youtube"]+'" target="_blank" class="youtube-btn"></a>';
   			 }else if(json_lang=="chs" && hisList[i]["youkou"]){
   			 content=hisList[i][title_lang]+'<a href="http://v.youku.com/v_show/id_'+hisList[i]["youkou"]+'" target="_blank" class="youtube-btn"></a>';
   			 }else{
   			 content=hisList[i][title_lang];
   			 }

			timeline_data[i]=
			{
			type:'blog_post',
			date:hisList[i]["date"].substring(0, 4),
			title:hisList[i]["date"].substring(0, 4),
			content:content,
			images:imgs
			   };
   			}



            timeline = new Timeline($('#factory-timeline'), timeline_data);
            timeline.setOptions({
            	dateFormat: 		 'YYYY',
                animation:           true,
                lightbox:            true,
                columnMode:          'dual',
                order:               'desc',
                separator:           'year',
                first_separator:     true,
                responsive_width:    768
            });
            timeline.display();


        });
    </script>




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
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/factory_intro_tc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/factory_intro_tc.jpg" class="visible-xs">
						<?php elseif($lang=='cht'):?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/factory_intro_tc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/factory_intro_tc.jpg" class="visible-xs">
						<?php else:?>
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/factory_intro_sc.jpg" class="hidden-xs">
						<img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/factory_intro_sc.jpg" class="visible-xs">
						<?php endif;?>

					</section>
					<section id="factory-wrapper">
						<div class="intro-text">
						{{$factoryintros[0]->$content_lang}}
						</div>
						<br><br>
						<div id="factory-timeline"></div>
					</section>
				</div>
			</div>
			@include('layouts/footer')
		</div>
		<!-- Page Content -->
	</div>
</body>
</html>
