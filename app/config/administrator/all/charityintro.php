<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => "Charity Fund >>> Introduction(ALL)",

	'single' => "charityintro",

	'model' => 'Charityintro',
	
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
    'content_eng' => 'required',

	),
	
	/*Messages*/
	'messages' => array(
    'content_eng.required' => 'The Content(ENG) is required',

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
	
		'content_eng'=> array(
        'title' => 'Content(ENG)'
        
    	),
    	'content_cht'=> array(
        'title' => 'Content(CHT)'
    	),
    		'content_chs'=> array(
        'title' => 'Content(CHS)'
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
	'content_eng'=> array(
        'title' => 'Content(ENG)'
    	),
    		'content_cht'=> array(
        'title' => 'Content(CHT)'
    	),
    		'content_chs'=> array(
        'title' => 'Content(CHS)'
    	),
		
    
    	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		'content_eng'=> array(
        'title' => 'Content(ENG)',
        'type' => 'wysiwyg'
        
    	),
    	'content_cht'=> array(
        'title' => 'Content(CHT)',
        'type' => 'wysiwyg'
    	),
    		'content_chs'=> array(
        'title' => 'Content(CHS)',
        'type' => 'wysiwyg'
    	),
		'first_year'=> array(
        'title' => 'First Year Option',
        'type' => 'text'
    	),
		'second_year'=> array(
        'title' => 'Second Year Option',
        'type' => 'text'
        
    	),
   
	),
	
);