<?php

include('global.php');


/**
 * Page model config
 */

return array(

	'title' => 'Home >>> Video Links (ALL)',

	'single' => 'homeyoutube',

	'model' => 'Homeyoutube',
	
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
    'link' => 'required',

	),
	
	/*Messages
	'messages' => array(
    'txt_en.required' => 'The Procedure Info(EN) is required',
    'txt_ch.required' => 'The Procedure Info(CN) is required',
	'txt_en2.required' => 'The Content(FAQ)(EN) is required',
    'txt_ch2.required' => 'The Content(FAQ)(CN) is required',
    'txt_en3.required' => 'The Content(Contact Us)(EN) is required',
    'txt_ch3.required' => 'Content(Contact Us)(CN) is required'
	),
	*/
	
	/**
	 * The display columns
	 */
	'columns' => array(
	
			'link'=> array(
        'title' => 'Youtube Link'
    	),	
		'link2'=> array(
        'title' => 'Youkou Link'
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
        'title' => 'Youtube Link'
    	),	
    		'link2'=> array(
        'title' => 'Youkou Link'
    	),	
	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		
				'link'=> array(
        'title' => 'Youtube Link'
    	),	
  			'link2'=> array(
        'title' => 'Youkou Link'
    	),	
	
    
    
	),
	
);