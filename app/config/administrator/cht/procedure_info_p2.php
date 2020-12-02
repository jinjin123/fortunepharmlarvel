<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => 'Prodedure Info >>> Part 2',

	'single' => 'procedure_info_p2',

	'model' => 'Procedureinfo',
	
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
    'p2_title_en' => 'required',
	'p2_title_ch' => 'required',
	'p2_image_1' => 'required',
	'p2_image_2' => 'required',
	'p2_image_3' => 'required',
	'p2_image_4' => 'required',
	'p2_image_5' => 'required',
	'p2_image_6' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
    'p2_title_en.required' => 'The Title(EN) is required',
    'p2_title_ch.required' => 'The Title(CN) is required',
	'p2_image_1.required' => 'The image is required',
	'p2_image_2.required' => 'The image is required',
	'p2_image_3.required' => 'The image is required',
	'p2_image_4.required' => 'The image is required',
	'p2_image_5.required' => 'The image is required',
	'p2_image_6.required' => 'The image is required',
	),
	
	
	/**
	 * The display columns
	 * 	'p2_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p2_title_ch'=> array(
        'title' => 'Title(CN)'
    	),
	 */
	'columns' => array(
	
		'p2_image_1' => array(
    	'title' => "Image 1",
    	'type'=>'image',
     	'output' => function($value)
    	{
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/'.$value);
        return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
		}else{
		return '<p>No Image</p>';	
		}	
		},
		),
		'p2_image_2' => array(
    	'title' => "Image 2",
    	'type'=>'image',
     	'output' => function($value)
    	{
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/'.$value);
        return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
		}else{
		return '<p>No Image</p>';	
		}	
		},
		),
		'p2_image_3' => array(
    	'title' => "Image 3",
    	'type'=>'image',
     	'output' => function($value)
    	{
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/'.$value);
        return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
		}else{
		return '<p>No Image</p>';	
		}	
		},
		),
		'p2_image_4' => array(
    	'title' => "Image 4",
    	'type'=>'image',
     	'output' => function($value)
    	{
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/'.$value);
        return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
		}else{
		return '<p>No Image</p>';	
		}	
		},
		),
		'p2_image_5' => array(
    	'title' => "Image 5",
    	'type'=>'image',
     	'output' => function($value)
    	{
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/'.$value);
        return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
		}else{
		return '<p>No Image</p>';	
		}	
		},
		),
		'p2_image_6' => array(
    	'title' => "Image 6",
    	'type'=>'image',
     	'output' => function($value)
    	{
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/'.$value);
        return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
		}else{
		return '<p>No Image</p>';	
		}	
		},
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
		'p2_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p2_title_ch'=> array(
        'title' => 'Title(CN)'
    	), 	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		'p2_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p2_title_ch'=> array(
        'title' => 'Title(CN)'
    	),
		'p2_image_1'=> array(
        'title' => 'Image 1',
         'type' => 'image',
         'location' => storage_path() . '/uploads/',
   		 'naming' => 'keep',
    	'mimes' => 'jpg,jpeg,png,bmp',
        'description' => 'Suggested image size: 414(W) x 434(H)',
    	 ),
    	'p2_image_2'=> array(
        'title' => 'Image 2',
         'type' => 'image',
         'location' => storage_path() . '/uploads/',
   		 'naming' => 'keep',
    	'mimes' => 'jpg,jpeg,png,bmp',
        'description' => 'Suggested image size: 414(W) x 434(H)',
    	 ),
    	'p2_image_3'=> array(
        'title' => 'Image 3',
         'type' => 'image',
         'location' => storage_path() . '/uploads/',
   		 'naming' => 'keep',
    	'mimes' => 'jpg,jpeg,png,bmp',
        'description' => 'Suggested image size: 414(W) x 434(H)',
    	 ),
    	'p2_image_4'=> array(
        'title' => 'Image 4',
         'type' => 'image',
         'location' => storage_path() . '/uploads/',
   		 'naming' => 'keep',
    	'mimes' => 'jpg,jpeg,png,bmp',
        'description' => 'Suggested image size: 414(W) x 434(H)',
    	 ),
    	'p2_image_5'=> array(
        'title' => 'Image 5',
         'type' => 'image',
         'location' => storage_path() . '/uploads/',
   		 'naming' => 'keep',
    	'mimes' => 'jpg,jpeg,png,bmp',
        'description' => 'Suggested image size: 414(W) x 434(H)',
    	 ),
    	'p2_image_6'=> array(
        'title' => 'Image 6',
         'type' => 'image',
         'location' => storage_path() . '/uploads/',
   		 'naming' => 'keep',
    	'mimes' => 'jpg,jpeg,png,bmp',
        'description' => 'Suggested image size: 414(W) x 434(H)',
    	 ),
 
    
	),
	
);