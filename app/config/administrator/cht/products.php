<?php

/**
 * Images model config
 */

return array(

	'title' => 'Products >>> Products(CHT)',

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
 	'name_cht' => 'required',
	'short_desc_cht' => 'required',
	'desc_cht' => 'required',
	'pack_size_cht' => 'required',
	'administration_cht' => 'required',
	'ingredient_cht' => 'required',
	'caution_cht' => 'required',
	'storage_cht' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
	'name_cht.required' => 'The Name(CHT) is required',
	'short_desc_cht.required' => 'The Short description(CHT) is required',
	'desc_cht.required' => 'The Description(CHT) is required',
	'pack_size_cht.required' => 'The Pack size(CHT) is required',
	'administration_cht.required' => 'The Short Description(CHT) is required',
	'ingredient_cht.required' => 'The Dosage and Administration (CHT) is required',
	'caution_cht.required' => 'The Caution (CHT) is required',
	'storage_cht.required' => 'The Storage and Packaging Safety (CHT) is equired',
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
     	'select' => "(:table).name_cht",
		),
		
    	'series'=> array(
        'title' => 'Series',
        'relationship' => 'series', 
        'select' => "(:table).name_cht",
    	),

		'name_cht'=> array(
		'title' => 'Product Name(CHT)',
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
        'name_field' => 'name_cht',
    	),
    	'series'=> array(
        'title' => 'Series',
        'type' => 'relationship',
        'name_field' => 'name_cht',
    	),
    	'reg_num'=> array(
		'title' => 'Registion number',
		),
		'name_cht'=> array(
		'title' => 'Product Name(CHT)',
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
        'name_field' => 'name_cht',
    	),
		
		'series'=> array(
        'title' => 'Series',
        'type' => 'relationship',
        'name_field' => 'name_cht',
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
        'onset' => '初發',
        'slight'=> '輕微',
        'critical' => '嚴重',
        'null' => 'null',
    	),
		),
		
		'name_cht' => array(
		'title' => 'Product Name(CHT)',
		),

		'short_desc_cht' => array(
		'title' => 'Short Description(CHT)',
		),

		'desc_cht' => array(
		'title' => 'Description(CHT)',
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
	

		'pack_size_cht' => array(
		'title' => 'Presentation and Pack Size(CHT)',
		'type' => 'wysiwyg'
		),
		
		'indication_cap_cht' => array(
		'title' => 'Indication Caption(CHT)',
		),			
		
			'indication_remark_cht'=> array(
		'title' => 'Indication Remark(CHT)',
		),
			
			'indications'=> array(
		'type' => 'relationship',
		'title' => 'Indication',
		'name_field' => 'indication_cht',
 
		),	
			
	
		'administration_cht' => array(
		'title' => 'Dosage and Administration(CHT)',
		'type' => 'wysiwyg'
		),
		
	
		'ingredient_cht' => array(
		'title' => 'Active ingredient(CHT)',
		'type' => 'wysiwyg'
		),
		
	
		'caution_cht' => array(
		'title' => 'Caution(CHT)',
		'type' => 'wysiwyg'
		),
		
	
		'storage_cht' => array(
		'title' => 'Storage and Packaging Safety(CHT)',
		'type' => 'wysiwyg'
		),
		

	),

);