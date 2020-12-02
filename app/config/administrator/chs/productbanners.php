<?php

/**
 * Images model config
 */

return array(

	'title' => 'Products >>> Product Banner(CHS)',

	'single' => 'productbanner',

	'model' => 'Productbanner',
	
	'form_width' => 1000,

	/*Rules*/
	'rules' => array(
 	'name_chs' => 'required',
	'desc_chs' => 'required',
	'link' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
	'name_chs.required' => 'The Name(CHS) is required',
	'desc_chs.required' => 'The Description(CHS) is required',
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
	
		'name_chs'=> array(
		'title' => 'Banner name(CHS)',
		),
		
		'desc_chs'=> array(
		'title' => 'Description (CHS)',
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
        'name_field' => 'name_chs',
    	),
		 
		'def'=> array(
        'title' => 'Default Banner',
        'type' => 'bool',
    	),
		
	
		
		'name_chs'=> array(
		'title' => 'Banner name(CHS)',
		),
		
	
		'desc_chs' => array(
		'title' => 'Description(CHS)',

		),
		

		
		'img_chs' => array(
  		'title' => 'Banner Image(CHS)',
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