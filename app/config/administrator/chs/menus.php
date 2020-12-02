<?php

/**
 * Menu model config
 */
 
return array(
	
	'title' => 'Menus (CHS)',

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
	'name_chs' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
	'name_chs.required' => 'The Menu(CHS) is required'
	),

	/**
	 * The display columns
	 */
	'columns' => array(
		
	
    	'name_chs'=> array(
        'title' => 'Menu Title (CHS)'
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
        'title' => 'Menu Title (CHS)'
    	),
    	
	),

	/**
	 * The editable fields 	//'editable' => false,
	 */

	
		'edit_fields' => array(
		
	
    	
   		'name_chs'=> array(
        'title' => 'Menu Title (CHS)'
    	),
 
 
	),
	

	

	

);

