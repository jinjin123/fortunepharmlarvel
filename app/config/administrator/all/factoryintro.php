<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => "Factory Intro >>> Introduction(ALL)",

	'single' => "factoryintro",

	'model' => 'Factoryintro',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button	**/
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
		'content_eng' => 'required',
		'content_cht' => 'required',
		'content_chs' => 'required',
	),

	'columns' => array(
	
		'content_eng'=> array(
        	'title' => 'Intro Content(ENG)'
    	),
		'content_cht'=> array(
        	'title' => 'Intro Content(CHT)'
    	),
		'content_chs'=> array(
        	'title' => 'Intro Content(CHS)'
    	),

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
	 * The filter set
	 */
	'filters' => array(
		'content_eng'=> array(
			'title' => 'Intro Content(ENG)'
		),
		'content_cht'=> array(
			'title' => 'Intro Content(CHT)'
		),
		'content_chs'=> array(
			'title' => 'Intro Content(CHS)'
		),
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
	
			'content_eng'=> array(
				'title' => 'Intro Content(ENG)',
				'type' => 'wysiwyg'
			),

			'content_cht'=> array(
				'title' => 'Intro Content(CHT)',
				'type' => 'wysiwyg'
			),

			'content_chs'=> array(
				'title' => 'Intro Content(CHS)',
				'type' => 'wysiwyg'
			),
		
    	),
	
);