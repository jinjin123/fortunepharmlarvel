<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => "Contact Us >>> Job application(CHT)",

	'single' => "job",

	'model' => 'Job',
	
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
    'content_cht' => 'required',
  

	),
	
	/*Messages*/
	'messages' => array(
    'content_cht.required' => 'The content is required',


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
	
		'content_cht'=> array(
        'title' => 'Content(CHT)'
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
'content_cht'=> array(
        'title' => 'Content(CHT)'
    	),
		
    
    	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		'content_cht'=> array(
        'title' => 'Content(CHT)',
        'type' => 'wysiwyg',    
    	),
   
	),
	
);