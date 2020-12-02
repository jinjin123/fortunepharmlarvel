<?php

/**
 * Images model config
 */

return array(

	'title' => 'Products >>> Products(ENG)',

	'single' => 'product',

	'model' => 'Product',
	
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
 	'name_eng' => 'required',
	'short_desc_eng' => 'required',
	'desc_eng' => 'required',
	'pack_size_eng' => 'required',
	'administration_eng' => 'required',
	'ingredient_eng' => 'required',
	'caution_eng' => 'required',
	'storage_eng' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
	'name_eng.required' => 'The Name(ENG) is required',
	'short_desc_eng.required' => 'The Short description(ENG) is required',
	'desc_eng.required' => 'The Description(ENG) is required',
	'pack_size_eng.required' => 'The Pack size(ENG) is required',
	'administration_eng.required' => 'The Short Description(ENG) is required',
	'ingredient_eng.required' => 'The Dosage and Administration (ENG) is required',
	'caution_eng.required' => 'The Caution (ENG) is required',
	'storage_eng.required' => 'The Storage and Packaging Safety (ENG) is equired',
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

		'name_eng'=> array(
		'title' => 'Product Name(ENG)',
		),
		'order_seq'=> array(
        'title' => 'Order(Descending)',
    	),

	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
	
		'publish' => array(
		'title' => 'Publish',
		'type'=>'bool'
		),
			
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
    	'reg_num'=> array(
		'title' => 'Registion number',
		),
		'name_eng'=> array(
		'title' => 'Product Name(ENG)',
		),
		'order_seq'=> array(
        'title' => 'Order',
    	),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
	
		'publish'=> array(
        'title' => 'publish',
          'type' => 'bool',
    	),
		
		
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
	
		'reg_num'=> array(
		'title' => 'Registion number',
		),
		
		'order_seq'=> array(
        'title' => 'Order',
    	),
    	
		'condition' => array(
		'type' => 'enum',
		'title' => 'Condition',
		'options' => array(
        'onset' => 'onset',
        'slight'=> 'slight',
        'critical' => 'critical',
        'null' => 'null',
    	),
		),
				
		'name_eng' => array(
		'title' => 'Product Name(ENG)',
		),

		'short_desc_eng' => array(
		'title' => 'Short Description(ENG)',
		),

		'desc_eng' => array(
		'title' => 'Description(ENG)',
		'type' => 'wysiwyg'
		),
		
	'product_img1' => array(
  	'title' => 'Image 1',
    'type' => 'image',
        'location' => storage_path() . '/uploads/thumbs/',
    'description' => 'Suggested image size: 1000(W) x 1000(H)',
    'naming' => 'random',
    'mimes' => 'jpg,jpeg,png,bmp,gif',
	'sizes' => array(
        array(1000, 1000, 'fit', storage_path() . '/uploads/thumbs/full/', 100),
        array(450, 450, 'fit', storage_path() . '/uploads/thumbs/medium/', 100),
        array(90, 90, 'fit', storage_path() . '/uploads/thumbs/icon/', 100),    
        array(50, 50, 'fit', storage_path() . '/uploads/thumbs/small/', 100)
    )
	),
	
	'product_img2' => array(
  	'title' => 'Image 2',
    'type' => 'image',
    'location' => storage_path() . '/uploads/thumbs/',
    'description' => 'Suggested image size: 1000(W) x 1000(H)',
    'naming' => 'random',
    'mimes' => 'jpg,jpeg,png,bmp,gif',
	'sizes' => array(
        array(1000, 1000, 'fit', storage_path() . '/uploads/thumbs/full/', 100),
        array(450, 450, 'fit', storage_path() . '/uploads/thumbs/medium/', 100),
        array(50, 50, 'fit', storage_path() . '/uploads/thumbs/small/', 100)
    )
	),
	
	'product_img3' => array(
  	'title' => 'Image 3',
    'type' => 'image',
     'location' => storage_path() . '/uploads/thumbs/',
    'description' => 'Suggested image size: 1000(W) x 1000(H)',
    'naming' => 'random',
    'mimes' => 'jpg,jpeg,png,bmp,gif',
	'sizes' => array(
        array(1000, 1000, 'fit', storage_path() . '/uploads/thumbs/full/', 100),
        array(450, 450, 'fit', storage_path() . '/uploads/thumbs/medium/', 100),
        array(50, 50, 'fit', storage_path() . '/uploads/thumbs/small/', 100)
    )
	),
	

		'pack_size_eng' => array(
		'title' => 'Presentation and Pack Size(ENG)',
		'type' => 'wysiwyg'
		),
			
			
		'indication_cap_eng' => array(
		'title' => 'Indication Caption(ENG)',
		),
		
		'indication_remark_eng'=> array(
		'title' => 'Indication Remark(ENG)',
		),			
			
			'indications'=> array(
		'type' => 'relationship',
		'title' => 'Indication',
		'name_field' => 'indication_eng',
 
		),	
			
	
		'administration_eng' => array(
		'title' => 'Dosage and Administration(ENG)',
		'type' => 'wysiwyg'
		),
		
	
		'ingredient_eng' => array(
		'title' => 'Active ingredient(ENG)',
		'type' => 'wysiwyg'
		),
		
	
		'caution_eng' => array(
		'title' => 'Caution(ENG)',
		'type' => 'wysiwyg'
		),
		
	
		'storage_eng' => array(
		'title' => 'Storage and Packaging Safety(ENG)',
		'type' => 'wysiwyg'
		),
		

	),

);