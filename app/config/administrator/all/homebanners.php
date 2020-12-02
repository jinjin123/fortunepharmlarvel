<?php

include('global.php');


/**
 * Page model config
 */

return array(

	'title' => 'Home >>> Banners (ALL)',

	'single' => 'homebanner',

	'model' => 'Homebanner',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button**/
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
	
	
	/*Rules*/
	'rules' => array(
    'link' => 'required',
	'name_eng' => 'required',
	'name_cht' => 'required',
	'name_chs' => 'required',
	),
	
	/*Messages	*/
	'messages' => array(
    'name_eng.required' => 'The Banner Name(ENG) is required',
    'name_cht.required' => 'The Banner Name(CHT) is required',
	'name_chs.required' => 'The Banner Name(CHS) is required',
	'link.required' => 'The Link is required',

	),

	
	/**
	 * The display columns
	 */
	'columns' => array(
	
	 	'img_eng' => array(
    	'title' => "Banner Image(ENG)",
  		'type'=>'image',
     	'output' => function($value)
    	{
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/thumbs/full/'.$value);
        return '<img src="'.$GLOBALS['home_directory'].'app/storage/uploads/thumbs/full/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
		}else{
		return '<p>No Image</p>';	
		}	
		
		},
		),	
		
			'link'=> array(
        'title' => 'Link'
    	),	
	),


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
	 * The filter set
	 */
	'filters' => array(
	
		'link'=> array(
        'title' => 'Link'
    	),
    	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		
	
		
		
		'name_eng'=> array(
        'title' => 'Name(ENG)',
    	),
    	
		'name_cht'=> array(
  	   'title' => 'Name(CHT)',
    	),
    	
		'name_chs'=> array(
        'title' => 'Name(CHS)',
    	),
		
		'img_eng' => array(
  		'title' => 'Banner Image(ENG)',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 600(W) x 200(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(600, 200, 'fit', storage_path() . '/uploads/thumbs/full/',100)
    	)
		),
		
		'img_cht' => array(
  		'title' => 'Banner Image(CHT)',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 600(W) x 200(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(600, 200, 'fit', storage_path() . '/uploads/thumbs/full/',100)
    	)
		),
		
		
		'img_chs' => array(
  		'title' => 'Banner Image(CHS)',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 600(W) x 200(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(600, 200, 'fit', storage_path() . '/uploads/thumbs/full/',100)
    	)
		),
		
		'linktype'=> array(
		'type' => 'enum',
        'title' => 'Link Type',
        'options' => array(
        'in'=>'Internal Link',
        'ex'=>'External Link',
   		  ),
    	),
		
		'link'=> array(
        'title' => 'Link',
    	),
  		
    
    
	),
	
);