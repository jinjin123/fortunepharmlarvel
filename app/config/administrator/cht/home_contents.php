<?php

/**
 * Page model config
 */

return array(

	'title' => 'Home >>> Content',

	'single' => 'homecontent',

	'model' => 'Homecontent',
	
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
    'txt_en' => 'required',
	'txt_ch' => 'required',
	'txt_en2' => 'required',
	'txt_ch2' => 'required',
	'txt_en3' => 'required',
	'txt_ch3' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
    'txt_en.required' => 'The Procedure Info(EN) is required',
    'txt_ch.required' => 'The Procedure Info(CN) is required',
	'txt_en2.required' => 'The Content(FAQ)(EN) is required',
    'txt_ch2.required' => 'The Content(FAQ)(CN) is required',
    'txt_en3.required' => 'The Content(Contact Us)(EN) is required',
    'txt_ch3.required' => 'Content(Contact Us)(CN) is required'

	),
	
	
	/**
	 * The display columns
	 */
	'columns' => array(
	
		'txt_en'=> array(
        'title' => 'Procedure Info(EN)'
    	),
    	'txt_en2'=> array(
        'title' => 'FAQ(EN)'
    	),
    	'txt_en3'=> array(
        'title' => 'Contact Us(EN)'
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
		'txt_en'=> array(
        'title' => 'Procedure Info(EN)'
    	),
    	'txt_en2'=> array(
        'title' => 'FAQ(EN)'
    	),
    	'txt_en3'=> array(
        'title' => 'Contact Us(EN)'
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
    	'txt_ch'=> array(
        'title' => 'Procedure Info(CN)'
    	),
    	'txt_ch2'=> array(
        'title' => 'FAQ(CN)'
    	),
    	'txt_ch3'=> array(
        'title' => 'Contact Us(CN)'
    	),
    	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		 'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'txt_en'=> array(
		 'type' =>'textarea',
    	'height' => 130,
        'title' => 'Procedure Info(EN)',
        'limit'=>255,
    	),
    	'txt_en2'=> array(
    	'type' =>'textarea',
    	'height' => 130,
        'title' => 'FAQ(EN)',
           'limit'=>255,
    	),
    	'txt_en3'=> array(
    	 'type' =>'textarea',
    	'height' => 130,
        'title' => 'Contact Us(EN)',
           'limit'=>255,
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
    	'txt_ch'=> array(
    	 'type' =>'textarea',
    	'height' => 130,
        'title' => 'Procedure Info(CN)',
           'limit'=>255,
    	),
    	'txt_ch2'=> array(
    	 'type' =>'textarea',
    	'height' => 130,
        'title' => 'FAQ(CN)',
           'limit'=>255,
    	),
    	'txt_ch3'=> array(
    	 'type' =>'textarea',
    	'height' => 130,
        'title' => 'Contact Us(CN)',
        'limit'=>255,
    	),
  
    
    
	),
	
);