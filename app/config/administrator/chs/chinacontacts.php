<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => "Contact Us >>> China(ALL)",

	'single' => "chinacontact",

	'model' => 'Chinacontact',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button		**/
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
    'phone' => 'required',
    'fax' => 'required',
    'email' => 'required',

	),
	
	/*Messages*/
	'messages' => array(
    'phone.required' => 'The phone is required',
    'fax.required' => 'The fax is required',
    'email.required' => 'The email is required',

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
	
		'phone'=> array(
        'title' => 'Phone'
    	),
    	'fax'=> array(
        'title' => 'Fax',
    	),
    	'email'=> array(
        'title' => 'Email',
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
		'phone'=> array(
        'title' => 'Phone'
    	),
    	'fax'=> array(
        'title' => 'Fax',
    	),
    	'email'=> array(
        'title' => 'Email',
    	),
		
    
    	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		'phone'=> array(
        'title' => 'Phone'
    	),
    	'fax'=> array(
        'title' => 'Fax',
    	),
    	'email'=> array(
        'title' => 'Email',
    	),
   
	),
	
);