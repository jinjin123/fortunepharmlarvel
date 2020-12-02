<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
    <?php if(isset($products) && $products[$product_tab]->seo !== ''): ?>
    <meta name="keywords" content="{{$products[$product_tab]->seo}}">
    <?php elseif(isset($current_serie) && $current_serie[0]->seo !== ''): ?>
    <meta name="keywords" content="{{$current_serie[0]->seo}}">
    <?php elseif(isset($seo)): ?>
    <meta name="keywords" content="{{$seo}}">
    <?php endif; ?>
	<meta name="author" content="">
	<meta property="wb:webmaster" content="b6422425c79d00d3" />


     
    <!--<link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">-->
    <title>Fortune Pharmacal Co., Ltd.</title>
    
    {{ HTML::style('assets/css/bootstrap-3.3.1/css/bootstrap.css');}}
    {{ HTML::style('assets/css/bootstrap-9.css');}}
    {{ HTML::style('assets/js/fancybox/jquery.fancybox.css');}}
    {{ HTML::style('assets/css/sidebar.css');}}
    {{ HTML::style('assets/css/style.css');}}
    {{ HTML::style('assets/css/fine_tune.css');}}
    
    
    <?php if ($lang=='cht'):?>
    {{ HTML::style('assets/css/cht.css');}}
    <?php elseif ($lang=='chs'):?>
    {{ HTML::style('assets/css/chs.css');}}
    <?php else:?>
     {{ HTML::style('assets/css/eng.css');}}
	<?php endif;?>
	
	{{ HTML::style('assets/css/new.css');}}
	

   	{{ HTML::script('assets/js/jquery-1.11.2.js') }}
    {{ HTML::script('assets/css/bootstrap-3.3.1/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/fancybox/jquery.fancybox.js') }}
    {{ HTML::script('assets/js/jquery.nicescroll.min.js') }}
    {{ HTML::script('assets/js/script.js') }}
    <!--新浪微博-->
	<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=424597837" type="text/javascript" charset="utf-8"></script>

     
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>