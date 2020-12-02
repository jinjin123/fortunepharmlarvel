@include('global') 
<?php
$page="procedure-info";
$banner_title = Menu::find(3)->name;
$banner_sub_title = 'Be hot. But without the sweat.';
$banner_img = 'product_banner.png';

$breadcrumbs = array();
if($lang=='en'){
$breadcrumbs[] = array('name'=>'Home', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'Procedure Information', 'link'=>'procedure-info');
}else{
$breadcrumbs[] = array('name'=>'首頁', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'療程資料', 'link'=>$GLOBALS['home_directory'].$lang.'/procedure-info');	
	
}
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="procedure">
	
@include('layouts.header') 
@include('layouts.navbar')   
@include('layouts.inner-banner') 
@include('layouts.breadcrumbs')  
    <section id="content">
        <div class="container-fluid content-tab-wapper">
            <div class="container">
                <a href="javascript:void(0);" class="content-tab active" tab="1">{{$p1_title}}</a>
                <a href="javascript:void(0);" class="content-tab" tab="2">{{$p2_title}}</a>
                <a href="javascript:void(0);" class="content-tab" tab="3">{{$p3_title}}</a>
                <a href="javascript:void(0);" class="content-tab" tab="4">{{$p4_title}}</a>
                <a href="javascript:void(0);" class="content-tab" tab="5">{{$p5_title}}</a>
            </div>
        </div>
        <div class="container-fluid wrapper1">
            <div class="container">
                <div class="row procedure-wrapper" rel="1">
                    <div class="col-md-12 procedure-title">
                        <h3 class="title blue">{{$p1_title}}</h3>
                    </div>
                    <div class="col-md-12 procedure-content">
                        <div class="col-md-6">
                            <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/{{$p1_img1_url}}" />
                        </div>
                        <div class="col-md-6">
                        	{{$p1_content}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wrapper2">
            <div class="container">
                <div class="row procedure-wrapper" rel="2">
                    <div class="col-md-12 procedure-title">
                        <h3 class="title blue">{{$p2_title}}</h3>
                    </div>
                    <div class="col-md-12 procedure-content">
                        <div class="left">
                            <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/{{$p2_img1_url}}" />
                            <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/{{$p2_img2_url}}" />
                        </div>
                        <div class="right">
                            <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/{{$p2_img4_url}}" />
                            <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/{{$p2_img3_url}}" />
                        </div>
                        <div class="left">
                            <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/{{$p2_img5_url}}" />
                            <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/{{$p2_img6_url}}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wrapper1">
            <div class="container">
                <div class="row procedure-wrapper" rel="3">
                    <div class="col-md-12 procedure-title">
                        <h3 class="title blue">{{$p3_title}}</h3>
                    </div>
                    <div class="col-md-12 procedure-content">
             		{{$p3_content}}
                    </div>
                </div>
                <div class="row procedure-wrapper" rel="4">
                    <div class="col-md-12 procedure-title">
                        <h3 class="title blue">{{$p4_title}}</h3>
                    </div>
                    <div class="col-md-12 procedure-content">
					{{$p4_content}}
                    </div>
                </div>
                <div class="row procedure-wrapper" rel="5">
                    <div class="col-md-12 procedure-title">
                        <h3 class="title blue">{{$p5_title}}</h3>
                    </div>
                    <div class="col-md-12 procedure-content">
                    {{$p5_content}}
                    </div>
                </div>
            </div>
        </div>
    </section>
   	@include('layouts.footer')
</body>
</html>