<?php

/**
 * Region model config
 */

return array(

	'title' => 'Privacy Policy',

	'single' => 'policys',

	'model' => 'Policy',

	'form_width' => 800,
	
	/** Disable Function**/
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
    'title_en' => 'required',
	'title_ch' => 'required',
	'content_en' => 'required',
	'content_ch' => 'required',

	),
	
	/*Messages*/
	'messages' => array(
	'name_en.required' => 'The Title(EN) is required',
	'name_ch.required' => 'The Title(CN) is required',
	'content_en.required' => 'The Content(EN) is required',
	'content_ch.required' => 'The Content(CN) is required',
	

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

		'title_en' => array(
		'title' => 'Title(EN)',
		),
		'title_ch' => array(
		'title' => 'Title(CN)',
		),


	),


	/**
	 * The filter set
	 */
	'filters' => array(

		'title_en' => array(
		'title' => 'Title(EN)',
		),
		'content_en' => array(
		'title' => 'Content(EN)',
		),
		'title_ch' => array(
		'title' => 'Title(CN)',
		),
		'content_ch' => array(
		'title' => 'Content(CN)',
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
		'title_en' => array(
		'title' => 'Title(EN)',
		),
		'content_en' => array(
		'type' => 'wysiwyg',
		'title' => 'Content(EN)',
		),
		'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'title_ch' => array(
		'title' => 'Title(CN)',
		),
		'content_ch' => array(
		'type' => 'wysiwyg',
		'title' => 'Content(CN)',
		),
	
	
	

),
);