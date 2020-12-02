@include('../global') 
<?php
	$countries = Country::all();
	$districts = District::all();
	$clinics = Clinic::all();
	$countries_name=array();
	$countries_title=array();
	$x=0;
	 

	foreach ($clinics as $clinic){
	$cid=District::find($clinic->district_id)->country_id; 
	if($lang=='en'){	
	$countries_title[$x]=Country::find($cid)->name_en;
	$countries_link[$x]=Country::find($cid)->name_en;
	}else{
	$countries_title[$x]=Country::find($cid)->name_ch;
	$countries_link[$x]=Country::find($cid)->name_en;
	}
	
	$x++;
	}
	$after_countries_name=array_unique($countries_link);
	$after_countries_title=array_unique($countries_title);
	

?> 

<section id="search-bar">
    <div class="wrapper">
        <div class="inner-wrapper">
            <label for="search">FIND A PHYSICIAN</label>
            <select id="search">
                <option value=""></option>
                
              
                <?php if($lang=='en') :?>
               <?php foreach ($after_countries_name as $after_countrie_name) :?>
                	   	
                <option value="{{$after_countrie_name}}">{{$after_countrie_name}}</option>
    
                 <?php endforeach;?> 
                <?php endif;?>
                
               	  <?php if($lang=='cn') :?>
               	  	<?php $x=0;?>
               	  	  <?php foreach ($after_countries_name as $after_countrie_name) :?>	  	
               	  <option value="{{$after_countrie_name}}">{{$after_countries_title[$x]}}</option>
               	   <?php $x++;?>
               	 		<?php endforeach;?>
               	  <?php endif;?>
         
                
            </select>
       
            <button onclick="goContact('{{$lang}}','{{$GLOBALS['home_directory']}}')">GO</button>
        </div>
    </div>
</section>