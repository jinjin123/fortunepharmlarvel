<?php

/**
 * Region model config
 */

return array(

	'title' => 'Regions',

	'single' => 'region',

	'model' => 'Region',

	'form_width' => 800,
	
	/** Disable Function**/
	'action_permissions'=> array(
	'delete' => function($model)
	{
	return false;
	},
	),
	
	/**
	 * The sort options for a model
 	*
 	* @type array
 	*/
	'sort' => array(

		'name' => array(
		'title' => 'Region',
		),



),


	/**
	 * The display columns
	 */
	'columns' => array(

		'name' => array(
		'title' => 'Region',
		),

	),


	/**
	 * The filter set
	 */
	'filters' => array(

		'name' => array(
		'title' => 'Region',
		),
		),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
	
	'name' => array(
		'title' => 'Region',
		),
		'publish'=> array(
        'title' => 'Publish',
        'type'=> 'bool',
    	),
	

),
);