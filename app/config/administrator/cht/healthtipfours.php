<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Sputum & Cough(CHT)',

	'single' => 'healthtipfour',

	'model' => 'Healthtipfour',
	
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
    'intro1_cht' => 'required',
	'detail1_cht' => 'required',
	),
	
	/*Messages
	'messages' => array(
	'name_chs' => 'The Market(chs) is required',
	'name_cht' => 'The Market(CHT) is required',
	'name_chs' => 'The Market(CHS) is required'
	),
	*/

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
		'intro1_cht'=> array(
		'title' => 'Introduction  (CHT)',
		),
		'detail1_cht'=> array(
		'title' => 'Detail (CHT)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_cht'=> array(
		'title' => 'Introduction  (CHT)',
		),
		'detail1_cht'=> array(
		'title' => 'Detail (CHT)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro **/

		'intro1_cht'=> array(
		'title' => 'Introduction  (CHT)',
		'type'=>'textarea',
		),
		
	
		/** Part-2 Detail **/
	
		'detail1_cht'=> array(
		'title' => 'Detail (CHT)',
		'type' => 'wysiwyg'
		),

		

	),

);