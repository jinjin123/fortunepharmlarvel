<?php

/**
 * Images model config
 */

return array(

	'title' => 'Products >>> Markets(CHT)',

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

	'name_cht' => 'required',
	),
	
	/*Messages*/
	'messages' => array(

	'name_cht' => 'The Market(CHT) is required',

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

		'name_cht' => array(
		'title' => 'Market Name(CHT)',
		),

	
	),




	/**
	 * The filter set
	 */
	'filters' => array(

		'name_cht' => array(
		'title' => 'Market Name(CHT)',
		),


	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(

		'name_cht' => array(
		'title' => 'Market Name(CHT)',
		),


	),

);