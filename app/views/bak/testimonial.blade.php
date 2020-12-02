@include('global') 
<?php
$page='testimonial';
$banner_title = 'Success Stories';
$banner_sub_title = 'Gain confidence and freedom forever';
$banner_img = 'testimonial_banner.png';

$breadcrumbs = array();
if($lang=='en'){
$breadcrumbs[] = array('name'=>'Home', 'link'=>'');
$breadcrumbs[] = array('name'=>'Success Stories', 'link'=>'testimonial');
}else{
$breadcrumbs[] = array('name'=>'首頁', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'個案分享', 'link'=>$GLOBALS['home_directory'].$lang.'/testimonial');		
}
$data = array();
$testimonials=Testimonial::where('publish','=',1)->orderBy('updated_at', 'desc')->get();
$images=Image::all();

if($lang=='en'){
foreach ($testimonials as $testimonial){
$img_id=$testimonial->image_id;	
$image = Image::find($img_id);
$country_id=$testimonial->country_id;	
$cou = Country::find($country_id);

$content_en = nl2br($testimonial->content_en);

$data[] = array('title'=>$testimonial->title_en, 'youtube'=>$testimonial->youtube, 'img'=>$GLOBALS['home_directory'].'app/storage/uploads/'.$testimonial->image, 'author'=>$testimonial->author_en, 'content'=>$content_en, 'type'=>$testimonial->gender, 'country'=>$cou->name_en,'kind'=>$testimonial->type);

}
}else{
foreach ($testimonials as $testimonial){
$img_id=$testimonial->image_id;	
$image = Image::find($img_id);
$country_id=$testimonial->country_id;	
$cou = Country::find($country_id);

$content_ch = nl2br($testimonial->content_ch);

$data[] = array('title'=>$testimonial->title_ch, 'youtube'=>$testimonial->youtube, 'img'=>$GLOBALS['home_directory'].'app/storage/uploads/'.$testimonial->image, 'author'=>$testimonial->author_ch, 'content'=>$content_ch, 'type'=>$testimonial->gender, 'country'=>$cou->name_ch, 'kind'=>$testimonial->type);

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
          		<a href="{{$GLOBALS['home_directory']}}{{$lang}}/success-stories" class="content-tab" tab="1">What's New</a>
                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/testimonial" class="content-tab active" tab="2">Testimonial</a>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row filter-wrapper">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <p class="green">Gender:</p>
                        <label class="type" val="female"><span></span>Female</label>
                        <label class="type" val="male"><span></span>Male</label>
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
                <div class="row testimonial-wrapper">
                    <div class="col-md-12 youtube-outer-wrapper">
                        <div class="youtube-wrapper">
                           <iframe width="500" height="300" src="https://www.youtube.com/embed/<?=$data[0]['youtube']?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
                 
                            <h3><?=$data[0]['title']?></h3>
                            <p><?=$data[0]['content']?></p>
                        </div>
                    </div> 
                    <div class="col-xs-12 col-sm-12 col-md-6 video-wrapper">
                        <?php foreach ($data as $key => $value):?>
                            <?php if($value['kind'] == 'video'):?>
                                <div class="col-xs-6 col-sm-4 col-md-6">
                                    <div id="video<?=$key?>" class="video-content" type="<?=$value['type']?>" country="<?=$value['country']?>">
                                        <h3 class="blue"><?=$value['title']?></h3>
                                        <div class="image">
                                            <img class="video-img" src="<?=$value['img']?>" />
                                            <?php if($value['type'] == 'video'):?>
                                                <img class="play-btn" src="{{$GLOBALS['home_directory']}}app/assets/img/video_play_btn.png" />
                                            <?php endif;?>
                                        </div>
                                        <p class="author"><?=$value['author']?></p>
                                        <?php if(strlen($value['content']) >= 25):?>
                                            <p class="content"><?= mb_substr($value['content'], 0, 25, 'UTF-8')?>..</p>
                                        <?php else:?>
                                        <p class="content"><?=$value['content']?></p>
                                        <?php endif;?>
                                        <p class="title-data"><?=$value['title']?></p>
                                        <p class="content-data"><?=$value['content']?></p>
                                        <p class="youtube-data"><?=$value['youtube']?></p>
                                   </div>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 print-wrapper">
                        <?php foreach ($data as $key => $value):?>
                            <?php if($value['kind'] == 'text'):?>
                                <div class="col-md-12">
                                    <div id="text<?=$key?>" class="video-content" type="<?=$value['type']?>" country="<?=$value['country']?>">
                                        <h3 class="blue"><?=$value['title']?></h3>
                                        <p class="author"><?=$value['author']?></p>
                                        <p class="content"><?=$value['content']?></p>
                                    </div>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @include('layouts.footer')
</body>
</html>