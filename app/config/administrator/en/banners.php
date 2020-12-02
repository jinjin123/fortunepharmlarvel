<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => 'Home >>> Banner',

	'single' => 'banner',

	'model' => 'Banner',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button
	'action_permissions'=> array(
	'delete' => function($model)
	{
	return false;
	},
	),
	**/
	/*Rules*/
	'rules' => array(
    'txt1' => 'required',
	'txt1_ch' => 'required',
	'txt2' => 'required',
	'txt2_ch' => 'required',
	'txt3' => 'required',
	'txt3_ch' => 'required',
	'image'=>'required'
	),
	
	/*Messages*/
	'messages' => array(
    'txt1.required' => 'The Title (EN) is required',
    'txt1_ch.required' => 'The Title (CN) is required',
	'txt2.required' => 'The Sub-title 1 (EN) is required',
    'txt2_ch.required' => 'The Sub-title 1 (CN) is required',
    'txt3.required' => 'The Sub-title 2 (EN) is required',
    'txt3_ch.required' => 'The Sub-title 2 (CN) is required',

	),
	
	/**
	 * The display columns
	 */
	'columns' => array(
		'txt1'=> array(
        'title' => 'Title (EN)'
    	),
    	 
	 	'image' => array(
    	'title' => "Image",
		'type'=>"Image",
		'output' => function($value)
    	{
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/'.$value);
        return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
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
		'image'=> array(
        'title' => 'image name',
    	),
		'video_link'=> array(
        'title' => 'Youtube link',
    	),
    	'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,
  	 	'editable' => false,
    	),
    	'txt1'=> array(
        'title' => 'Title (EN)'
    	),
    	'txt2'=> array(
      	'title' => 'Sub-title 1 (EN)'
    	),
		'txt3'=> array(
        'title' => 'Sub-title 2 (EN)'
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
    	'txt1_ch'=> array(
       	'title' => 'Title (CN)'
    	),
    	'txt2_ch'=> array(
        'title' => 'Sub-title 1 (CN)'
    	),
    	'txt3_ch'=> array(
        'title' => 'Sub-title 2 (CN)'
    	),
  
  
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		'publish'=> array(
        'title' => 'Publish',
        'type'=> 'bool',
    	),
    
		/*
		'image'=> array(
        'title' => 'Background image',
        'type' => 'relationship',
        'name_field' => 'url',

        'description' => 'Suggested image size: 1550(W) x 640(H)',
    	),
		 * 
	 	*/
	 	
	 	'image'=> array(
        'title' => 'Background image',
        'type' => 'image',
         'location' => storage_path() . '/uploads/',
   		 'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp',
        'description' => 'Suggested image size: 1550(W) x 640(H)',
      	'sizes' => array(
        array(1550, 640, 'crop', storage_path() . '/uploads/thumbs/full/', 100),
        array(383, 276, 'crop', storage_path() . '/uploads/thumbs/medium/', 100),
        array(220, 138, 'crop', storage_path() . '/uploads/thumbs/samll/', 100)
    		)
    	),
  
    	'video_link'=> array(
        'title' => 'Youtube link',
    	),
	
    	'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,
  	 
    	),
    	'txt1'=> array(
        'title' => 'Title (EN)'
    	),
    	'txt2'=> array(
      	'title' => 'Sub-title 1 (EN)'
    	),
		'txt3'=> array(
        'title' => 'Sub-title 2 (EN)'
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 
    	),
    	'txt1_ch'=> array(
       	'title' => 'Title (CN)'
    	),
    	'txt2_ch'=> array(
        'title' => 'Sub-title 1 (CN)'
    	),
    	'txt3_ch'=> array(
        'title' => 'Sub-title 2 (CN)'
    	),
	
  
   
    
	),




);