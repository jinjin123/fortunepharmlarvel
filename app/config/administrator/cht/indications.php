<?php

return array(

	'title' => 'Products >>> Indications(CHT)',

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
	'indication_cht' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
	'indication_cht.required' => 'The Indication(CHT) is required',
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
	

		'indication_cht' => array(
		'title' => 'Indication (CHT)',
		),
	
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(

		'indication_cht' => array(
		'title' => 'Indication (CHT)',
		),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
	
		'indication_cht' => array(
		'title' => 'Indication (CHT)',
		),


	),

);