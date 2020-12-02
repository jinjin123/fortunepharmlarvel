<?php

/**
 * Images model config
 */

return array(

	'title' => 'Products >>> Product Banner(ENG)',

	'single' => 'productbanner',

	'model' => 'Productbanner',
	
	'form_width' => 1000,

	/*Rules*/
	'rules' => array(
 	'name_eng' => 'required',
	'desc_eng' => 'required',
	'link' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
	'name_eng.required' => 'The Name(ENG) is required',
	'desc_eng.required' => 'The Description(ENG) is required',
	'link.required' => 'The Link is required',
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
	
		'name_eng'=> array(
		'title' => 'Banner name(ENG)',
		),
		
		'desc_eng'=> array(
		'title' => 'Description (ENG)',
		),
		
		
		/*
		'markets' => array(
    	'title' => "Market",
    	'relationship' => 'markets', 
     	'select' => "(:table).name_eng",
		),
		
    	'series'=> array(
        'title' => 'Series',
        'relationship' => 'series', 
        'select' => "(:table).name_eng",
    	),
		 */
    	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
		
			'def'=> array(
        'title' => 'Default Banner',
        'type' => 'bool',
    	),
		
		'name_eng'=> array(
		'title' => 'Banner name',
		),
		/*
		'markets'=> array(
        'title' => 'Market',
        'type' => 'relationship',
        'name_field' => 'name_eng',
    	),
		
		'series'=> array(
        'title' => 'Series',
        'type' => 'relationship',
        'name_field' => 'name_eng',
    	),
		 */
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
	
		/*
		'markets'=> array(
        'title' => 'Market',
        'type' => 'relationship',
        'name_field' => 'name_eng',
    	),
		*/
		
		
		
		
		
		'series'=> array(
        'title' => 'Series',
        'type' => 'relationship',
        'name_field' => 'name_eng',
    	),
		 
		'def'=> array(
        'title' => 'Default Banner',
        'type' => 'bool',
    	),
    	

		
		
		'name_eng'=> array(
		'title' => 'Banner name(ENG)',
		),
		

		'desc_eng'=> array(
		'title' => 'Description(ENG)',
		),
	
		
		'img_eng' => array(
  		'title' => 'Banner Image(ENG)',
   		'type' => 'image',
        'location' => storage_path() . '/uploads/thumbs/',
   		'description' => 'Suggested image size: 820(W) x 290(H)',
    	'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		),
		
		'linktype'=> array(
		'type' => 'enum',
        'title' => 'Link Type',
        'options' => array(
        'in'=>'Internal Link',
        'ex'=>'External Link',
   		  ),
    	),	
		
		'link' => array(
		'title' => 'Link',
		),
		
		
		
	
	),

);