<?php

/**
 * Images model config
 */

return array(

	'title' => 'Healthcare Series >>> Markets(ENG)',

	'single' => 'market',

	'model' => 'Market',
	
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
    'name_eng' => 'required',

	),
	
	/*Messages*/
	'messages' => array(
	'name_eng' => 'The Country(ENG) is required',

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
	 * The display columns
	 */
	'columns' => array(
		'name_eng'=> array(
		'title' => 'Market Name(ENG)',
		),

	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
		'name_eng'=> array(
		'title' => 'Market Name(ENG)',
		),


	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		'name_eng'=> array(
		'title' => 'Market Name(ENG)',
		),


	),

);