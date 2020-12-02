<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => "Terms >>> Terms(ALL)",

	'single' => "term",

	'model' => 'Term',
	
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

	/*Rules*/
	'rules' => array(
    'title_eng' => 'required',

	),
	
	/*Messages*/
	'messages' => array(
    'title_eng.required' => 'The title(ENG) is required',

	),
	
	/**
	 * The display columns
	 *  	 	'image' => array(
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
	 */
	'columns' => array(
	
		'title_eng'=> array(
        'title' => 'Title(ENG)'
    	),
    	'content_eng'=> array(
        'title' => 'Content(ENG)',
        'type' => 'wysiwyg',
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
		'title_eng'=> array(
        'title' => 'Title(ENG)'
    	),
    	'content_eng'=> array(
        'title' => 'Content(ENG)',
        'type' => 'wysiwyg',
    	),
    	
  	 	'title_cht'=> array(
        'title' => 'Title(CHT)'
    	),
    	'content_cht'=> array(
        'title' => 'Content(CHT)',
        'type' => 'wysiwyg',
    	),
    		'title_chs'=> array(
        'title' => 'Title(CHS)'
    	),
    	'content_chs'=> array(
        'title' => 'Content(CHS)',
        'type' => 'wysiwyg',
    	),
		
    
    	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		'title_eng'=> array(
        'title' => 'Title(ENG)'
    	),
    	'content_eng'=> array(
        'title' => 'Content(ENG)',
        'type' => 'wysiwyg',
    	),
    	
  	 	'title_cht'=> array(
        'title' => 'Title(CHT)'
    	),
    	'content_cht'=> array(
        'title' => 'Content(CHT)',
        'type' => 'wysiwyg',
    	),
    	'title_chs'=> array(
        'title' => 'Title(CHS)'
    	),
    	'content_chs'=> array(
        'title' => 'Content(CHS)',
        'type' => 'wysiwyg',
    	),
   
	),
	
);