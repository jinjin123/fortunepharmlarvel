<?php

/**
 * Images model config
 */

return array(

	'title' => 'Contact Us >>> Part 2',

	'single' => 'contactus',

	'model' => 'Contact',
	
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
    'p2_title_en' => 'required',
	'p2_title_ch' => 'required',
	'p2_content_en' => 'required',
	'p2_content_ch' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
	'p2_title_en.required' => 'The Title(EN) is required',
	'p2_title_ch.required' => 'The Title(CN) is required',
	'p2_content_en.required' => 'The Content(EN) is required',
	'p2_content_ch.required' => 'The Content(CN) is required'

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
		'p2_title_en'=> array(
		'title' => 'Title(EN)',
		),
		'p2_title_ch' => array(
		'title' => 'Title(CN)',
		),
	
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
		'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'p2_title_en'=> array(
		'title' => 'Title(EN)',
		),
		'p2_content_en'=> array(
		'title' => 'Content(EN)',
		),
		'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'p2_title_ch' => array(
		'title' => 'Title(CN)',
		),
		'p2_content_ch' => array(
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
		'p2_title_en'=> array(
		'title' => 'Title(EN)',
		),
		'p2_content_en'=> array(
		'type' => 'wysiwyg',
		'title' => 'Content(EN)',
		),
		'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'p2_title_ch' => array(
		'title' => 'Title(CN)',
		),
		'p2_content_ch' => array(
		'type' => 'wysiwyg',
		'title' => 'Content(CN)',
		),
	
	

	),

);