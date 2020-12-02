<?php

return array(

	'title' => 'Products >>> Indications(CHS)',

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
	'indication_chs' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
	'indication_chs.required' => 'The Indication(CHS) is required',
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
	

		'indication_chs' => array(
		'title' => 'Indication (CHS)',
		),
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(

		'indication_chs' => array(
		'title' => 'Indication (CHS)',
		),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(

		'indication_chs' => array(
		'title' => 'Indication (CHS)',
		),

	),

);