<?php

/**
 * Page model config
 */

return array(

	'title' => 'Prodedure Info >>> Part 5',

	'single' => 'procedure_info_p5',

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
    'p5_title_en' => 'required',
	'p5_title_ch' => 'required',
	'p5_content_en' => 'required',
	'p5_content_ch' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
    'p5_title_en.required' => 'The Title(En) is required',
    'p5_title_ch.required' => 'The Title(Ch) is required',
	'p5_content_en.required' => 'The Content(En) is required',
    'p5_content_ch.required' => 'The Content(Ch) is required'
	),
	
	
	/**
	 * The display columns
	 */
	'columns' => array(
		
		'p5_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p5_title_ch'=> array(
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
		'p5_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p5_title_ch'=> array(
        'title' => 'Title(CN)'
    	),
    	'p5_content_en'=> array(
        'title' => 'Content(EN)'
    	),
    	'p5_content_ch'=> array(
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
		'p5_title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'p5_content_en'=> array(
    	'type' => 'wysiwyg',
        'title' => 'Content(EN)'
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
    	'p5_title_ch'=> array(
        'title' => 'Title(CN)'
    	),
    	'p5_content_ch'=> array(
    	'type' => 'wysiwyg',
        'title' => 'Content(CN)'
    	),
   
    
    
	),
	
);