<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => 'Prodedure Info >>> Part 1',

	'single' => 'procedure_info_p1',

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
    'p1_title_en' => 'required',
	'p1_title_ch' => 'required',
	'p1_content_en' => 'required',
	'p1_content_ch' => 'required',
	'p1_image' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
    'p1_title_en.required' => 'The Title(EN) is required',
    'p1_title_ch.required' => 'The Title(CN) is required',
	'p1_content_en.required' => 'The Content(EN) is required',
    'p1_content_ch.required' => 'The Content(CN) is required'

	),
	
	
	/**
	 * The display columns
	 */
	'columns' => array(
			'p1_title_en'=> array(
        'title' => 'Title(EN)'
    	),
  	 	'p1_image' => array(
    	'title' => "Image",
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
		'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,
  	 	'editable' => false,
    	),
	  	'p1_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p1_content_en'=> array(
        'title' => 'Content(EN)'
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
    	'p1_title_ch'=> array(
        'title' => 'Title(CN)'
    	),
    	'p1_content_ch'=> array(
        'title' => 'Content(CN)'
    	),	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		'p1_image'=> array(
        'title' => 'Image',
         'type' => 'image',
         'location' => storage_path() . '/uploads/',
   		 'naming' => 'keep',
    	'mimes' => 'jpg,jpeg,png,bmp',
        'description' => 'Suggested image size: 414(W) x 434(H)',
    	 ),
    	 'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'p1_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p1_content_en'=> array(
    	'type' => 'wysiwyg',
        'title' => 'Content(EN)'
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
    	'p1_title_ch'=> array(
        'title' => 'Title(CN)'
    	),
    	'p1_content_ch'=> array(
    	'type' => 'wysiwyg',
        'title' => 'Content(CN)'
    	),
    
	),
	
);