<?php
$page='contact-list';
$banner_title = 'Find A Physician';

$clinics= Clinic::all();
$districts=District::all();
$countries=Country::all();


foreach ($clinics as $clinic)
{
$district_id=$clinic->district_id;
$district =District::find($district_id); 

$cou=Country::find($district->country_id);
 
if($lang=='en'){
if($clinic->certified){
	$cr='y';
}else{
	$cr='n';
}
if($clinic->level=='Bronze'){
	$cl=1;
}else if($clinic->level=='Silver'){
	$cl=2;
}else if($clinic->level=='Gold'){
	$cl=3;
}else if($clinic->level=='Diamond'){
	$cl=4;
}else{
	$cl=0;
}
$location[$cou->name_en][$district->name_en][] = array('name'=>$clinic->name_en, 'address'=>$clinic->address_en, 'phone'=>$clinic->phone, 'link'=>$clinic->website,'glink'=>$clinic->googleMapLink , 'cert'=>$cr, 'level'=>$cl);			
 
}else{
if($clinic->certified){
	$cr='y';
}else{
	$cr='n';
}
if($clinic->level=='Bronze'){
	$cl=1;
}else if($clinic->level=='Silver'){
	$cl=2;
}else if($clinic->level=='Gold'){
	$cl=3;
}else if($clinic->level=='Diamond'){
	$cl=4;
}else{
	$cl=0;
}
$location[$cou->name_en][$district->name_ch][] = array('name'=>$clinic->name_ch, 'address'=>$clinic->address_ch, 'phone'=>$clinic->phone, 'link'=>$clinic->website,'glink'=>$clinic->googleMapLink ,'cert'=>$cr, 'level'=>$cl);			

}
}

/*
$location['Hong Kong']['Hong Kong Island'][] = array('name'=>'Hong Kong Dermatology and Laser Centre', 'address'=>'11/F Silver Fortune Plaza, 1 Wellington Street, Central, Hong Kong', 'phone'=>'2109 9999', 'link'=>'http://www.hkdermlaser.com/', 'cert'=>'y', 'level'=>0);
$location['Hong Kong']['Hong Kong Island'][] = array('name'=>'Perfect Skin Surgery Centre', 'address'=>'17/F, 36 Queen\'s Road Central,Central, Hong Kong', 'phone'=>'2727 3761', 'link'=>'http://www.perfectskinsurgery.com/index_en.php?id=aboutus', 'cert'=>'n', 'level'=>1);
*/


$data['location'] = (isset($_GET['location']) && $_GET['location'] != '')?$_GET['location']:'';
$data['data'] = $location[$data['location']];
//print_r($data);
?>

<!DOCTYPE html>
<html lang="en">
@include('layouts/head') 

 

<body id="contact-list">
<script>
$(document).ready(function() {
$('#search [value="<?=$data['location']?>"]').attr('selected','selected');
});
</script>   
    
@include('layouts.header') 
@include('layouts.navbar')
@include('layouts.banner')
@include('layouts.search')
    <section id="content">
    	<div class="container">
            <div class="clinic-header-wrapper">
                <div class="cert">Who are certified</div>
                <div class="level4">Diamond level</div>
                <div class="level3">Gold level</div>
                <div class="level2">Silver level</div>
                <div class="level1">Bronze level</div>
            </div>
            <?php $num = 0;?>
            <?php foreach ($data['data'] as $key => $value):?>
            <div class="row clinic-outer-wrapper <?php if($num == 0) echo 'active';?>">
        		<div class="col-md-12 title-wrapper">
    		    	<h3 class="blue"><?=$key?></h1>
                    <a href="javascript:void(0);" class="outer-show-btn btn"></a>
    		    </div>
    	    	<?php if(is_array($value) && !empty($value)):?>
    		    	<ul class="col-md-12 clinic-wrapper">
    		    		<li class="top"><h3>CLINIC NAME</h3></li>
    		    		<?php foreach ($value as $keyx => $valuex):?>
    			    		<li class="clinic-item">
    		    				<div class="name col-md-3"><?=$valuex['name']?></div>
                                <div class="logo col-md-1">
                                    <div class="logo-wrapper">
                                        <span class="cert <?=(isset($valuex['cert']) && $valuex['cert'] == 'y')?'active':'';?>"></span>
                                        <span class="level level<?=(isset($valuex['level']))?$valuex['level']:0;?>"></span>
                                        
                                    </div>
                                </div>
    		    				<div class="address col-md-4"><a href="<?=$valuex['glink']?>" target="_blank"><?=$valuex['address']?></a></div>
    		    				<div class="contact col-md-3">
    		    					<span><?=$valuex['phone']?></span>
    		    					<a href="<?=$valuex['link']?>" target="_blank"><?=$valuex['link']?></a>
    		    				</div>
    		    				<div class="site col-md-1"><a href="<?=$valuex['link']?>" target="_blank">View site</a></div>
    			    		</li>
    			    	<?php endforeach;?>
    		    	</ul>
    		    <?php endif;?>
            </div>
            <?php $num++;?>
            <?php endforeach;?>
		</div>
    </section>
     @include('layouts.footer') 
</body>
</html>