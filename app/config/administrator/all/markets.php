<?php

/**
 * Images model config
 */

return array(

	'title' => 'Products >>> Markets(ALL)',

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
	'name_cht' => 'required',
	'name_chs' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
	'name_eng' => 'The Market(ENG) is required',
	'name_cht' => 'The Market(CHT) is required',
	'name_chs' => 'The Market(CHS) is required'
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
		'name_cht' => array(
		'title' => 'Market Name(CHT)',
		),
		'name_chs' => array(
		'title' => 'Market Name(CHS)',
		),
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
		'name_eng'=> array(
		'title' => 'Market Name(ENG)',
		),
		'name_cht' => array(
		'title' => 'Market Name(CHT)',
		),
		'name_chs' => array(
		'title' => 'Market Name(CHS)',
		),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		'name_eng'=> array(
		'title' => 'Market Name(ENG)',
		),
		'name_cht' => array(
		'title' => 'Market Name(CHT)',
		),
		'name_chs' => array(
		'title' => 'Market Name(CHS)',
		),

	),

);