<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => 'About Us >>> Content',

	'single' => 'aboutuscontent',

	'model' => 'Aboutuscontent',
	
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
    'title_en' => 'required',
	'title_ch' => 'required',
	'content_en' => 'required',
	'content_ch' => 'required',
	'image'=>'required'
	),
	
	/*Messages*/
	'messages' => array(
    'title_en.required' => 'The Title(EN) is required',
    'content_en.required' => 'The Content(EN) is required',
    'title_ch.required' => 'The Title(CN) is required',
    'content_ch.required' => 'The Content(CN) is required'
	),
	
	
	/**
	 * The display columns
	 * 	'image' => array(
    	'title' => "Image",
    	'relationship' => 'image', 
     	'select' => "(:table).url",
		),
	 */
	'columns' => array(
	
		'title_en'=> array(
        'title' => 'Title(EN)'
    	),
    
    	'image' => array(
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
		'title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'content_en'=> array(
        'title' => 'Content(EN)'
    	),
    	'title_ch'=> array(
        'title' => 'Title(CN)'
    	),
    	'content_ch'=> array(
        'title' => 'Content(CN)'
    	),
    	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
 		'image'=> array(
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
		'title_en'=> array(
        'title' => 'Title(En)'
    	),
    	'content_en'=> array(
    	'type' => 'wysiwyg',
        'title' => 'Content(En)'
    	),
    	 'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
    	'title_ch'=> array(
        'title' => 'Title(Ch)'
    	),
    	'content_ch'=> array(
    	'type' => 'wysiwyg',
        'title' => 'Content(Ch)'
    	),
    
	),
	
);