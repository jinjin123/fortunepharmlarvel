<?php

/**
 * Menu model config
 */
 
return array(
	
	'title' => 'Menus (CHT)',

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
	'name_cht' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
	'name_cht.required' => 'The Menu(CHT) is required'
	),

	/**
	 * The display columns
	 */
	'columns' => array(
		
	
    	'name_cht'=> array(
        'title' => 'Menu Title (CHT)'
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
	'name_cht'=> array(
        'title' => 'Menu Title (CHT)'
    	),
    	
	),

	/**
	 * The editable fields 	//'editable' => false,
	 */

	
		'edit_fields' => array(
		
	
    	
   		'name_cht'=> array(
        'title' => 'Menu Title (CHT)'
    	),
 
 
	),
	

	

	

);

