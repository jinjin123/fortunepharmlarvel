@include('global') 
<?php
$page='success-stories';
$banner_title = Menu::find(5)->name; 
$banner_sub_title = 'Gain confidence and freedom forever';
$banner_img = 'testimonial_banner.png';

$breadcrumbs = array();
if($lang=='en'){
$breadcrumbs[] = array('name'=>'Home', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'Success Stories', 'link'=>'./success-stories');
}else{
$breadcrumbs[] = array('name'=>'首頁', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'個案分享', 'link'=>$GLOBALS['home_directory'].$lang.'/success-stories');		
}

$data = array();
$whatnews=Whatnew::where('publish','=',1)->orderBy('updated_at', 'desc')->get();
$images=Image::all();


if($lang=='en'){
foreach ($whatnews as $whatnew){
$img_id=$whatnew->image_id;	
$image = Image::find($img_id);
$country_id=$whatnew->country_id;	
$cou = Country::find($country_id);

$data[] = array('title'=>$whatnew->title_en, 'link'=>$whatnew->link, 'img'=>$GLOBALS['home_directory'].'app/storage/uploads/'.$whatnew->image, 'author'=>$whatnew->author_en, 'content'=>$whatnew->content_en, 'type'=>$whatnew->type, 'country'=>$cou->name_en);	
   }
   	
}else{
foreach ($whatnews as $whatnew){
$img_id=$whatnew->image_id;	
$image = Image::find($img_id);
$country_id=$whatnew->country_id;	
$cou = Country::find($country_id);

$data[] = array('title'=>$whatnew->title_ch, 'link'=>$whatnew->link, 'img'=>$GLOBALS['home_directory'].'app/storage/uploads/'.$whatnew->image, 'author'=>$whatnew->author_ch, 'content'=>$whatnew->content_ch, 'type'=>$whatnew->type, 'country'=>$cou->name_ch);	
   }

}

?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="success-stories">
	
	@include('layouts.header') 
	@include('layouts.navbar')
	@include('layouts.inner-banner')
	@include('layouts.breadcrumbs')
    
    <section id="content">
        <div class="container-fluid content-tab-wapper">
            <div class="container">
                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/success-stories" class="content-tab active" tab="1">What's New</a>
                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/testimonial" class="content-tab" tab="2">Testimonial</a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row filter-wrapper">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <p class="green">Type:</p>
                        <label class="type" val="video"><span></span>Video</label>
                        <label class="type" val="print"><span></span>Print</label>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <p class="green">Search by Country:</p>
                        <select class="country">
                            <option value="">--Please Select--</option>
                            <?php foreach ($countrynames as $key => $value) :?>
                            <option value="{{$value['country_name']}}">{{$value['country_name']}}</option>
                        	<?php endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="row video-wrapper">
                    <?php foreach ($data as $key => $value):?>
                        <div class="col-xs-6 col-sm-4 col-md-3">
                            <div id="content<?=$key?>" class="video-content" type="<?=$value['type']?>" country="<?=$value['country']?>">
                                <a href="<?=$value['link']?>" target="_blank">
                                    <h3 class="blue"><?=$value['title']?></h3>
                                    <div class="image">
                                        <img class="video-img" src="<?=$value['img']?>" />
                                        <?php if($value['type'] == 'video'):?>
                                            <img class="play-btn" src="{{$GLOBALS['home_directory']}}assets/img/video_play_btn.png" />
                                        <?php endif;?>
                                    </div>
                                    <p class="author"><?=$value['author']?></p>
                                    <?php if(strlen($value['content']) >= 25):?>
                                        <p class="content"><?= mb_substr($value['content'], 0, 25, 'UTF-8')?>..</p>
                                    <?php else:?>
                                    <p class="content"><?=$value['content']?></p>
                                    <?php endif;?>
                                </a>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
   	@include('layouts.footer')
</body>
</html>