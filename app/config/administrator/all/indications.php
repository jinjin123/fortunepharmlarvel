<?php

return array(

	'title' => 'Products >>> Indications(ALL)',

	'single' => 'indication',

	'model' => 'Indication',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button**/
	'action_permissions'=> array(
	'delete' => function($model)
	{
	return false;
	},

	),
	
	/*Rules*/
	'rules' => array(
	'indication_eng' => 'required',

	),
	
	/*Messages*/
	'messages' => array(
	'indication_eng.required' => 'The Indication(EN) is required',
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
	
		'indication_eng'=> array(
		'title' => 'Indication (ENG)',
		),
		'indication_cht' => array(
		'title' => 'Indication (CHT)',
		),
		'indication_chs' => array(
		'title' => 'Indication (CHS)',
		),
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
		'indication_eng'=> array(
		'title' => 'Indication (ENG)',
		),
		'indication_cht' => array(
		'title' => 'Indication (CHT)',
		),
		'indication_chs' => array(
		'title' => 'Indication (CHS)',
		),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
			'indication_eng'=> array(
		'title' => 'Indication (ENG)',
		),
		'indication_cht' => array(
		'title' => 'Indication (CHT)',
		),
		'indication_chs' => array(
		'title' => 'Indication (CHS)',
		),

	),

);