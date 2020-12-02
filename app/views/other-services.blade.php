<?php
$page="other-services";
$content_lang="content_".$lang;
$json_lang=json_encode($lang);


$row = $got[0];
$file = $row->pdffile;
$tl = "tagline_".$lang;
$cl = "content_".$lang;
$tagline = $row->$tl;
$content = $row->$cl;

switch($lang){
    case "cht":
        $btnTxt = "產品組合";
        break;
    case "chs":
        $btnTxt = "产品组合";
        break;
    case "eng":
        $btnTxt = "Product Portfolio";
        break;
}
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
    {{ HTML::script('assets/js/jquery.nicescroll.min.js') }}
	{{ HTML::script('assets/js/timeline/javascript/timeline.js') }}
    {{ HTML::script('assets/js/script.js') }}
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="other-services" class="contact-section">
<div id="wrapper">
    @include('layouts/sidebar')
            <!-- Page Content -->
    <div id="page-content-wrapper">
        @include('layouts/header')
         <div id="main">
            <div class="container-fluid">
                <section id="banner-wrapper">
                    <?php
                    if(isset($_GET['debug'])){ ?>
                        <img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/history_banner_en.jpg" class="hidden-xs">
                    <?php
                    } else {
                    ?>
                    <?php if($lang=='eng'):?>
                    <img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/other-services-banner_en.jpg" class="hidden-xs">
                    <img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/other-service_mobile_en.jpg" class="visible-xs">
                    <?php elseif($lang=='cht'):?>
                    <img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/other-services-banner.jpg" class="hidden-xs">
                    <img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/other-service_mobile.jpg" class="visible-xs">
                    <?php else:?>
                    <img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/other-services-banner_sc.jpg" class="hidden-xs">
                    <img src="{{$GLOBALS['home_directory']}}assets/img/top_banner/other-service_mobile_sc.jpg" class="visible-xs">
                    <?php endif;?>
                    <?php } ?>
                </section>
                <section id="os-wrapper">
                    <div class="content">
                        <div class="tagline" style="margin:10px 0;"><?=$tagline;?></div>
                        <div class="button-wrap"><a target="_blank" href="{{URL::to('/public/'.$file)}}" class="btn btn-primary"><?=$btnTxt;?></a></div>
                        <div class="text" style="margin:10px 0;"><?=$content;?></div>
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
