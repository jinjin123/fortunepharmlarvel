<?php

/**
 * Images model config
 */

return array(

	'title' => 'Success Stories >>> Countries',

	'single' => 'country',

	'model' => 'Country',
	
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
    'name_en' => 'required',
	'name_ch' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
	'name_en' => 'The Country(EN) is required',
	'name_ch' => 'The Country(CN) is required'

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
		'name_en'=> array(
		'title' => 'Country(EN)',
		),
		'name_ch' => array(
		'title' => 'Country(CN)',
		),
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
		'name_en'=> array(
		'title' => 'Country(EN)',
		),
		'name_ch' => array(
		'title' => 'Country(CN)',
		),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'name_en'=> array(
		'title' => 'Country(EN)',
		),
		'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'name_ch' => array(
		'title' => 'Country(CN)',
		),

	),

);