@include('global') 
<?php
$page="contact";

$banner_title = Menu::find(6)->name;
$banner_sub_title = 'Your Question, Answered';
$banner_img = 'contact_banner.png';

$breadcrumbs = array(); 
if($lang=='en'){
$breadcrumbs[] = array('name'=>'Home', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'Contact Us', 'link'=>'./contact');
}else{
$breadcrumbs[] = array('name'=>'首頁', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'聯絡我們', 'link'=>$GLOBALS['home_directory'].$lang.'/contact');		
}
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="contact">

@include('layouts.header') 
@include('layouts.navbar')   
@include('layouts.inner-banner')  	
@include('layouts.breadcrumbs') 

    <section id="content">
        <div class="container">
            <div class="col-md-6">
                <h3 class="title blue"><?php echo $p1_title;?></h3>
            	<?php echo $p1_content;?>
            </div>
            <div class="col-md-5">
                  <h3 class="title blue"><?php echo $p2_title;?></h3>
            	<?php echo $p2_content;?>
            </div>
        </div>
    </section>
	@include('layouts.footer')
</body>
</html>