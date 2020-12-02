<?php

/**
 * Menu model config
 */
 

return array(

	'title' => 'Footers',

	'single' => 'footer',

	'model' => 'Footer',
	
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
	},

	),

	/**
	 * The display columns
	 */
	'columns' => array(
		'txt_en'=> array(
        'title' => 'Menu(Eng)'
    	),
    	'txt_ch'=> array(
        'title' => 'Menu(中文)'
    	),
    
  
	//	'sub_menu'=> array(
    //    'title' => 'Sub-Menu'
    //	),
    //	'icon'=> array(
    //    'title' => 'Icon'
    //	),
	
   
 	
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

		'txt_en'=> array(
        'title' => 'Menu(Eng)'
    	),
    	'txt_ch'=> array(
        'title' => 'Menu(中文)'
    	),
    	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(

		'txt_en'=> array(
        'title' => 'Menu(Eng)'
    	),
    	'txt_ch'=> array(
        'title' => 'Menu(中文)'
    	),
    
    
	),
	
);