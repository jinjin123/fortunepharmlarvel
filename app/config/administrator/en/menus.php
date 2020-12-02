<?php

/**
 * Menu model config
 */
 
return array(
	
	'title' => 'Menus (ENG)',

	'single' => 'menu',

	'model' => 'Menu',
	
	'form_width' => 800,

	/** Disable the Create and Delete button**/
	'action_permissions'=> array(
	'delete' => function($model)
	{
	return false;
	},
	'create' => function($model)
	{
	return false;
	}
	),
	
	/*Rules*/
	'rules' => array(
	'name_eng' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
	'name_eng.required' => 'The Menu(ENG) is required'
	),

	/**
	 * The display columns
	 */
	'columns' => array(
		
	
    	'name_eng'=> array(
        'title' => 'Menu Title (ENG)'
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
	'name_eng'=> array(
        'title' => 'Menu Title (ENG)'
    	),
    	
	),

	/**
	 * The editable fields 	//'editable' => false,
	 */

	
		'edit_fields' => array(
		
	
    	
   		'name_eng'=> array(
        'title' => 'Menu Title (ENG)'
    	),
 
 
	),
	

	

	

);

