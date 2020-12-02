<?php
include	'global.php';
return array(

	'title' => 'About Us >>> Advertisments Banner (ALL)',

	'single' => 'introadvertisment',

	'model' => 'Introadvertisment',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button	**/
	'action_permissions'=> array(
	'delete' => function($model)
	{
	return false;
	},
	'create' => function($model)
	{
	return false;
	},
	

	),

	/*Rules
	'rules' => array(
    'p2_title_en' => 'required',
	'p2_title_ch' => 'required',
	'p2_content_en' => 'required',
	'p2_content_ch' => 'required'
	),
	*/
	/*Messages
	'messages' => array(
	'p2_title_en.required' => 'The Title(EN) is required',
	'p2_title_ch.required' => 'The Title(CN) is required',
	'p2_content_en.required' => 'The Content(EN) is required',
	'p2_content_ch.required' => 'The Content(CN) is required'

	),
*/
/**
 * The sort options for a model
 *
 * @type array
 */
'sort' => array(
    'field' => 'id',
    'direction' => 'asc',
),


	/**
	 * The display columns
	 */
	'columns' => array(
	
	
	 	'img_eng' => array(
    	'title' => 'Image(ENG)',
  		'type'=>'image',
     	'output' => function($value)
    	{
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/thumbs/'.$value);
        return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/thumbs/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
		}else{
		return '<p>No Image</p>';	
		}	
		
		},
		),	
	
			
		'img_mobile_eng' => array(
    	'title' => 'Mobile Image(ENG)',
  		'type'=>'image',
     	'output' => function($value)
    	{
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/thumbs/'.$value);
        return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/thumbs/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
		}else{
		return '<p>No Image</p>';	
		}	
		
		},
		),	
	
	
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
		'img_eng'=> array(
		'title' => 'Image(ENG)',
		),
	
		'img_mobile_eng'=> array(
		'title' => 'Mobile Image(ENG)',
		),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
	
	
		
		'img_eng' => array(
  		'title' => 'Image(ENG)',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 1650(W) x 290(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		),
				
		'img_cht' => array(
  		'title' => 'Image(CHT)',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 1650(W) x 290(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		),
		
		'img_chs' => array(
  		'title' => 'Image(CHS)',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 1650(W) x 290(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		),
	
		'img_mobile_eng' => array(
   		'title' => 'Mobile Image(ENG)',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 1000(W) x 358(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		),
		
		'img_mobile_cht' => array(
   		'title' => 'Mobile Image(CHT)',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 1000(W) x 358(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		),
		
		'img_mobile_chs' => array(
   		'title' => 'Mobile Image(CHS)',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 1000(W) x 358(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		),
	
	

	),

);