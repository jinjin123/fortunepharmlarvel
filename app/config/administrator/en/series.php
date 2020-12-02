<?php

/**
 * Images model config
 */

return array(

	'title' => 'Products >>> Series(ENG)',

	'single' => 'serie',

	'model' => 'Serie',
	
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
    'name_eng' => 'required',

	),
	
	/*Messages*/
	'messages' => array(
	'name_eng' => 'The Series Name(ENG) is required',

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
	
		'main_series'=> array(
		'title' => 'Normal / Children Series',
		),
		
		
			'sequence'=> array(
		'title' => 'Order',
		),	
		
		'name_eng'=> array(
		'title' => 'Series Name(ENG)',
		),

	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
	
		'publish' => array(
		'title' => 'Publish',
		'type'=>'bool'
		),
		
	
		'name_eng'=> array(
		'title' => 'Series Name(ENG)',
		),


	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
	
		'publish'=> array(
		'type' => 'bool',
		'title' => 'publish',
		),	
	
		'sequence'=> array(
		'title' => 'Order',
		),	
	
	'main_series'=> array(
		'title' => 'Normal / Children Series',
		 'type' => 'enum',
		  'options' => array(
        'Normal Series' => 'Normal Series',
        'Children Series' => 'Children Series'
    		),
		),
		
		'markets'=> array(
		'type' => 'relationship',
		'title' => 'markets',
		'name_field' => 'name_eng',
 
		),	
		'name_eng'=> array(
		'title' => 'Series Name(ENG)',
		),

	),

);