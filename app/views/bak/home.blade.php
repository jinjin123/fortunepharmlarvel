@include('global') 
<?php $page="home";
	  $banner_title=Menu::find(1)->name;
	  $images= Image::all();
$rights = DB::table('testimonials')
					->where('publish', '=', 1)
					->where('type', 'like', 'text')
                    ->orderBy('updated_at', 'desc')
					->take(3)
                    ->get();
					
$centers = DB::table('testimonials')
					->where('publish', '=', 1)
					->where('type', 'like', 'video')
                    ->orderBy('updated_at', 'desc')
					->take(4)
                    ->get();
					
$lefts = DB::table('whatnews')
					->where('publish', '=', 1)
                    ->orderBy('updated_at', 'desc')
					->take(5)
                    ->get();
			
?>

<!DOCTYPE html> 
<html lang="en">
@include('layouts/head') 
<body id="index">

@include('layouts.header') 
@include('layouts.navbar')    
@include('layouts.banner') 
@include('layouts.search')  
 
 
    <section id="detail">
        <div class="container">
            <div class="col-md-4 col product">
                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/procedure-info">
                    <h2 class="blue">Procedure Info</h2>
                    <p class="grey"><?php echo $homecontent1;?></p>
                </a>
            </div>
            <div class="col-md-4 col faq">
                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/faq">
                    <h2 class="blue">FAQ</h2>
                    <p class="grey"><?php echo $homecontent2;?></p>
                </a>  
            </div>
            <div class="col-md-4 col contact">
                <a href="{{$GLOBALS['home_directory']}}{{$lang}}/contact">
                    <h2 class="blue">Contact Us</h2>
                    <p class="grey"><?php echo $homecontent3;?></p>
                </a>
            </div>
        </div>
    </section>
    <section id="links">
        <div class="container">
            <div class="head">
                <h2 class="grey">What people are saying about <span class="green">mira</span><span class="blue">Dry</span></h2>
             
 					 <?php if($lang=='en'):?>
 					 <a href="{{$GLOBALS['home_directory']}}en/success-stories" class="more blue">More></a>
 					 <?php elseif($lang=='cn'):?>
 					 <a href="{{$GLOBALS['home_directory']}}cn/success-stories" class="more blue">More></a>
 					 <?php endif; ?>
 				
            </div> 
         
            <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-5 links-wrapper" >
       	
       		
            	<?php
            	$x_r=0;
                $y_r=0;
                for ($i = 0; $i <9; $i++) {
				if($i%2==1){
				echo '<div class="col-xs-6 col-sm-4 col-md-6">';
		
				$vid=$centers[$x_r]->id -1;
			
              	echo '<a class="links-border" target="_blank" href="./'.$lang.'/testimonial#video'.$vid.'"> <div> <img src="'.$GLOBALS["home_directory"].'app/storage/uploads/'.$centers[$x_r]->image.'"></div></a>';
		
				echo '</div>';
				$x_r++;	
				}else{
				$link=$lefts[$y_r]->link;		
				if (substr($link,0,4) !=='http'){
				$link='http://'.$lefts[$y_r]->link;
				}		
				echo '<div class="col-xs-6 col-sm-4 col-md-6">';
                echo '<a href="'.$link.'" class="links-border" target="_blank"><div> <img class="play-btn" src="'.$GLOBALS["home_directory"].'assets/img/video_play_btn.png"/ >  <img src="'.$GLOBALS["home_directory"].'app/storage/uploads/'.$lefts[$y_r]->image.'"></div></a>';
				echo '</div>';
				$y_r++;		
				}
				}
           		?>
       
  
          
            </div>
        
    
    	 <!--
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 links-wrapper">
                <?php foreach ($centers as $center) :?>
                <?php $img_id=$center->image_id; ?>	
				<?php $image = Image::find($img_id); ?>  
           		 <div class="col-xs-6 col-sm-4 col-md-6">
                    <a href="./{{$lang}}/testimonial#video{{$center->id-1}}" class="links-border"><div><img src="{{ $GLOBALS['home_directory']}}app/storage/uploads/{{$center->image}}"></div></a>
                </div>  
             	 <?php endforeach;?>
            </div>
          -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7 news-wrapper">
                <div class="col-md-12">
                	<?php if($lang=='en'):?>
                	<?php foreach ($rights as $right) :?>
                	<?php $img_id=$right->image_id; ?>	
					<?php $image = Image::find($img_id); ?>  
					<?php $sub_string_content_en=mb_substr($right->content_en,0,142,"utf-8"); ?>
					<?php $sub_string_content_en =$sub_string_content_en.' ...'; ?>
					
                    <a href="./{{$lang}}/testimonial#text{{$right->id-1}}" class="news-border">
                        <div>
                            <h4 class="title">{{$right->title_en}}</h4>
                            <p class="sub-title">{{$right->author_en}}</p>
                            <p class="content">{{$sub_string_content_en}}</p>
                        </div>
                    </a>
         		    <?php endforeach;?>
         		    <?php endif ?>
         		    
         		    <?php if($lang=='cn'):?>
         		    <?php foreach ($rights as $right) :?>
         		    <?php $img_id=$right->image_id; ?>	
					<?php $image = Image::find($img_id); ?> 
					<?php $sub_string_content_cn=mb_substr($right->content_ch,0,142,"utf-8"); ?>
					<?php $sub_string_content_cn =$sub_string_content_cn.' ...'; ?>
					
                    <a href="./{{$lang}}/testimonial#text{{$right->id-1}}" class="news-border">
                        <div>
                            <h4 class="title">{{$right->title_ch}}</h4>
                            <p class="sub-title">{{$right->author_ch}}</p>
                       		<p class="content">{{$sub_string_content_cn}}</p>
              
                        </div>
                    </a>
         		    <?php endforeach;?>
         		    <?php endif ?>
                </div>
            </div>
        </div>
    </section>
 	@include('layouts.footer')
</body>
</html>