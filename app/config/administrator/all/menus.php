<?php

/**
 * Menu model config
 */
 
return array(
	
	'title' => 'Menus (ALL)',

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
	'name_eng' => 'required',
	'name_cht' => 'required',
	'name_chs' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
	'name_eng.required' => 'The Menu(ENG) is required',
	'name_cht.required' => 'The Menu(CHT) is required',
	'name_chs.required' => 'The Menu(CHS) is required'
	),

	/**
	 * The display columns
	 */
	'columns' => array(
		
	
    	'name_eng'=> array(
        'title' => 'Menu Title (ENG)'
    	),
    	'name_cht'=> array(
        'title' => 'Menu Title (CHT)'
    	),
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
	 	'name_eng'=> array(
        'title' => 'Menu Title (ENG)'
    	),
    	'name_cht'=> array(
        'title' => 'Menu Title (CHT)'
    	),
    	'name_chs'=> array(
        'title' => 'Menu Title (CHS)'
    	),
    	
	),

	/**
	 * The editable fields 	//'editable' => false,
	 */

	
		'edit_fields' => array(
		
   		'name_eng'=> array(
        'title' => 'Menu Title (ENG)'
    	),
    	'name_cht'=> array(
        'title' => 'Menu Title (CHT)'
    	),
    	'name_chs'=> array(
        'title' => 'Menu Title (CHS)'
    	),
 
 
	),
	

	

	

);

