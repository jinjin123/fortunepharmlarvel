<?php

/**
 * Categories model config
 */

return array(

	'title' => 'Find A Physicians >>> Districts',
	
	'single' => 'district',

	'model' => 'District',

	'form_width' => 1000,
	
	/** Disable Function**/
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
	'name_en.required' => 'The District(EN) is required',
	'name_ch.required' => 'The District(CN) is required'
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
	 * 	
	 */

	
		'columns' => array(
		'country' => array(
    	'title' => "Country",
    	'relationship' => 'country', 
     	'select' => "(:table).name_en",
		),
		'name_en'=> array(
		'title' => 'District(EN)',
		),
		'name_ch' => array(
		'title' => 'District(CN)',
		),
	
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'country'=> array(
        'title' => 'Country',
        'type' => 'relationship',
        'name_field' => 'name_en',
    	 ),
		'name_en'=> array(
		'title' => 'District(EN)',
		),
		'name_ch' => array(
		'title' => 'District(CN)',
		),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		'country'=> array(
        'title' => 'Country',
        'type' => 'relationship',
        'name_field' => 'name_en',
    	 ),
    	 'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,

    	),
		'name_en'=> array(
		'title' => 'District(EN)',
		),
		'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,

    	),
		'name_ch' => array(
		'title' => 'District(CN)',
		),

	),

);