<?php

	$array_banner = array();
	$banners = Banner::all();
	$images= Image::all();
	
	if ($lang == "en"){
	foreach ($banners as $banner)
	{
	if($banner->publish){
	$img_id=$banner->image_id;	
	$image = Image::find($img_id);  
	  
	$image_path=$banner->image;	
	
	$array_banner[] = array('title1'=>$banner->txt1, 'title2'=>$banner->txt2, 'title3'=>$banner->txt3, 'bg_image'=>$GLOBALS['home_directory'].'app/storage/uploads/thumbs/full/'.$image_path, 'youtube'=>$banner->video_link);	
	}
	}
	}else{
	foreach ($banners as $banner)
	{
	if($banner->publish){
	$img_id=$banner->image_id;	
	$image = Image::find($img_id);    
	
	$image_path=$banner->image;	
	
	$array_banner[] = array('title1'=>$banner->txt1_ch, 'title2'=>$banner->txt2_ch, 'title3'=>$banner->txt3_ch, 'bg_image'=>$GLOBALS['home_directory'].'app/storage/uploads/'.$image_path, 'youtube'=>$banner->video_link);	
	}	
	}
	}
?>

<section id="banner" >
    <div class="container-fluid">
        <div id="banner-wrapper" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php for ($i=0; $i < count($array_banner); $i++):?>
                    <li data-target="#banner-wrapper" data-slide-to="<?=$i?>" <?php if($i == 0):?> class="active"<?php endif;?>></li>
                <?php endfor;?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php foreach ($array_banner as $key => $value) :?>
                    <div class="item <?php if($key == 0):?> active<?php endif;?>">
                        <img src="<?=$value['bg_image']?>" alt="<?=$value['title1']?>">
                        <div class="container">
                            <div class="carousel-content">
                                <p class="sub-title"><?=$value['title1']?></p>
                                <p class="title"><?=$value['title2']?></p>
                                <p class="title"><?=$value['title3']?></p>
                                <?php if($value['youtube'] != ''):?>
                                    <?php
                                        $link = 'https://www.youtube.com/embed/'.$value['youtube'];
                                        if($key == 0){
                                            $link .= '?autoplay=1';
                                        }
                                    ?>
                                    <div class="video"><iframe width="344" height="230" src="<?=$link?>" frameborder="0" allowfullscreen></iframe></div>
                                <?php else:?>
                                    <div class="no-video"></div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#banner-wrapper" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#banner-wrapper" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>