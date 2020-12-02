<?php

/**
 * Page model config
 */

return array(

	'title' => 'Prodedure Info >>> Part 4',

	'single' => 'procedure_info_p4',

	'model' => 'Procedureinfo',
	
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
    'p4_title_en' => 'required',
	'p4_title_ch' => 'required',
	'p4_content_en' => 'required',
	'p4_content_ch' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
    'p4_title_en.required' => 'The Title(EN) is required',
    'p4_title_ch.required' => 'The Title(CN) is required',
	'p4_content_en.required' => 'The Content(EN) is required',
    'p4_content_ch.required' => 'The Content(CN) is required'
	),
	
	
	/**
	 * The display columns
	 */
	'columns' => array(
		
		'p4_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p4_title_ch'=> array(
        'title' => 'Title(CN)'
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
	'p4_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p4_content_en'=> array(
        'title' => 'Content(EN)'
    	),
    	'p4_title_ch'=> array(
        'title' => 'Title(CN)'
    	),
    	'p4_content_ch'=> array(
        'title' => 'Content(CN)'
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
		'p4_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p4_content_en'=> array(
    	'type' => 'wysiwyg',
        'title' => 'Content(EN)'
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
    	'p4_title_ch'=> array(
        'title' => 'Title(CN)'
    	),
    	'p4_content_ch'=> array(
    	'type' => 'wysiwyg',
        'title' => 'Content(CN)'
    	),
 
    
    
	),
	
);