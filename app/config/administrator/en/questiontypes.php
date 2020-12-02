<?php

/**
 * Page model config
 */

return array(

	'title' => 'FAQ >>> Question Type',

	'single' => 'Questiontype',

	'model' => 'Questiontype',
	
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
    'name_en' => 'required',
'	 name_ch' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
    'name_en.required' => 'The Title(EN) is required',
    'name_ch.required' => 'The Title(CN) is required',

	),
	
	
	/**
	 * The display columns
	 */
	'columns' => array(

	 	'name_en'=> array(
        'title' => 'Title(EN)'
    	),
		'name_ch'=> array(
        'title' => 'Title(CN)'
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

 		'name_en'=> array(
        'title' => 'Title(EN)'
    	),
		'name_ch'=> array(
        'title' => 'Title(CN)'
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
 		'name_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'name_ch'=> array(
        'title' => 'FAQ Title(CN)'
    	),
  
    
	),




);