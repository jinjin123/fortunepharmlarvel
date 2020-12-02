@include('global') 
<?php 
$page="about";

$banner_title = Menu::find(2)->name; 
$banner_sub_title = 'Little to know about us. We are here for you.';
$banner_img = 'about_banner.png';

$breadcrumbs = array();
if($lang=='en'){
$breadcrumbs[] = array('name'=>'Home', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'About Us', 'link'=>'./about');
}else{
$breadcrumbs[] = array('name'=>'首頁', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'關於我們', 'link'=>$GLOBALS['home_directory'].$lang.'/about');	
}
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="about">

@include('layouts.header') 
@include('layouts.navbar')
@include('layouts.inner-banner')
@include('layouts.breadcrumbs')

    <section id="content">
        <div class="container">
            <div class="col-md-12">
                <h3 class="title blue"><?php echo $title?></h3>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 right">
                <img src="{{$GLOBALS['home_directory']}}app/storage/uploads/{{$image_url}}">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 right">
            <?php echo $content?>
            </div>
        </div>
    </section>
    @include('layouts.footer') 
</body>
</html>