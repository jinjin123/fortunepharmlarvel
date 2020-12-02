<?php

/**
 * Images model config
 */

return array(

	'title' => 'FAQ >>> FAQ Series(CHT)',

	'single' => 'faqserie',

	'model' => 'Faqserie',
	
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
    'name_cht' => 'required',

	),
	
	/*Messages*/
	'messages' => array(
	'name_cht' => 'The Series(CHT) is required',

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
		'sequence'=> array(
		'title' => 'Order',
		),		

		'name_cht' => array(
		'title' => 'Series Name(CHT)',
		),
		
	
	
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(

		'name_cht' => array(
		'title' => 'Series Name(CHT)',
		),
	

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
	
		'publish'=> array(
		'title' => 'Publish',
		'type'=>'bool'
		),
		
		'sequence'=> array(
		'title' => 'Order',
		),	
	
		'name_cht' => array(
		'title' => 'Series Name(CHT)',
		),
	

	),

);