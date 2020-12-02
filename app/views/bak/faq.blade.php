@include('global') 
<?php
$page="faq";
$banner_title = Menu::find(4)->name;
$banner_sub_title = 'Your Questions, Answered';
$banner_img = 'faq_banner.png'; 
 
$breadcrumbs = array(); 
if($lang=='en'){
$breadcrumbs[] = array('name'=>'Home', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'FAQ', 'link'=>'./faq');
}else{
$breadcrumbs[] = array('name'=>'首頁', 'link'=>$GLOBALS['home_directory'].$lang);
$breadcrumbs[] = array('name'=>'常見問答', 'link'=>$GLOBALS['home_directory'].$lang.'/faq');		
}
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 
<body id="faq">
	

@include('layouts.header') 
@include('layouts.navbar')   
@include('layouts.inner-banner') 
@include('layouts.breadcrumbs')  
    	


    <section id="content">
        <div class="container-fluid content-tab-wapper">
            <div class="container">
                <a href="javascript:void(0);" class="content-tab active" tab="1">{{$question1}}</a>
                <a href="javascript:void(0);" class="content-tab" tab="2">{{$question2}}</a>
                <a href="javascript:void(0);" class="content-tab" tab="3">{{$question3}}</a>
                <a href="javascript:void(0);" class="content-tab" tab="4">{{$question4}}</a>
                <a href="javascript:void(0);" class="content-tab" tab="5">{{$question5}}</a>
            </div>
        </div>
        <div class="container-fluid faq-main-wapper">
            <div class="container">
                <div class="row faq-outer-wrapper active" rel="1">
                    <div class="col-md-12 faq-outer-title">
                        <h3 class="title blue">{{$question1}}</h3>
                        <a href="javascript:void(0);" class="outer-show-btn btn"></a>
                    </div>
                    <div class="faq-outer-content">
                 
                    	<?php foreach ($qt1 as $key => $value) :?>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="faq-wrapper active">
                                <div class="faq-title">{{$value['ques']}}<a href="javascript:void(0);" class="show-btn btn"></a></div>
                                <div class="faq-content">{{$value['ans']}}</div>
                            </div>
                        </div>
                     	<?php endforeach;?>
                   
                    </div>
                </div>
                <div class="row faq-outer-wrapper" rel="2">
                    <div class="col-md-12 faq-outer-title">
                        <h3 class="title blue">{{$question2}}</h3>
                        <a href="javascript:void(0);" class="outer-show-btn btn"></a>
                    </div>
                    <div class="faq-outer-content">
                    	<?php foreach ($qt2 as $key => $value) :?>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="faq-wrapper">
                                <div class="faq-title">{{$value['ques']}}<a href="javascript:void(0);" class="show-btn btn"></a></div>
                                <div class="faq-content">{{$value['ans']}}</div>
                            </div>
                        </div>
              			<?php endforeach;?>
                    </div>
                </div>
                <div class="row faq-outer-wrapper" rel="3">
                    <div class="col-md-12 faq-outer-title">
                        <h3 class="title blue">{{$question3}}</h3>
                        <a href="javascript:void(0);" class="outer-show-btn btn"></a>
                    </div>
                    <div class="faq-outer-content">
                    	<?php foreach ($qt3 as $key => $value) :?>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="faq-wrapper">
                                <div class="faq-title">{{$value['ques']}}<a href="javascript:void(0);" class="show-btn btn"></a></div>
                                <div class="faq-content">{{$value['ans']}}</div>
                            </div>
                        </div>
              			<?php endforeach;?>
                    </div>
                </div>
                <div class="row faq-outer-wrapper" rel="4">
                    <div class="col-md-12 faq-outer-title">
                        <h3 class="title blue">{{$question4}}</h3>
                        <a href="javascript:void(0);" class="outer-show-btn btn"></a>
                    </div>
                    <div class="faq-outer-content">
                    	<?php foreach ($qt4 as $key => $value) :?>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="faq-wrapper">
                                <div class="faq-title">{{$value['ques']}}<a href="javascript:void(0);" class="show-btn btn"></a></div>
                                <div class="faq-content">{{$value['ans']}}</div>
                            </div>
                        </div>
               			<?php endforeach;?>
                    
                    </div>
                </div>
                <div class="row faq-outer-wrapper" rel="5">
                    <div class="col-md-12 faq-outer-title">
                        <h3 class="title blue">{{$question5}}</h3>
                        <a href="javascript:void(0);" class="outer-show-btn btn"></a>
                    </div>
                    <div class="faq-outer-content">
                    	<?php foreach ($qt5 as $key => $value) :?>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="faq-wrapper">
                                <div class="faq-title">{{$value['ques']}}<a href="javascript:void(0);" class="show-btn btn"></a></div>
                                <div class="faq-content">{{$value['ans']}}</div>
                            </div>
                        </div>
                        <?php endforeach;?>
                
                         
                    </div>
                </div>
            </div>
        </div>
    </section>
 	@include('layouts.footer')
</body>
</html>