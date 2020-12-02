<?php

/**
 * Images model config
 */

return array(

	'title' => 'Products >>> Products(CHS)',

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
 	'name_chs' => 'required',
	'short_desc_chs' => 'required',
	'desc_chs' => 'required',
	'pack_size_chs' => 'required',
	'administration_chs' => 'required',
	'ingredient_chs' => 'required',
	'caution_chs' => 'required',
	'storage_chs' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
	'name_chs.required' => 'The Name(CHS) is required',
	'short_desc_chs.required' => 'The Short description(CHS) is required',
	'desc_chs.required' => 'The Description(CHS) is required',
	'pack_size_chs.required' => 'The Pack size(CHS) is required',
	'administration_chs.required' => 'The Short Description(CHS) is required',
	'ingredient_chs.required' => 'The Dosage and Administration (CHS) is required',
	'caution_chs.required' => 'The Caution (CHS) is required',
	'storage_chs.required' => 'The Storage and Packaging Safety (CHS) is equired',
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
     	'select' => "(:table).name_chs",
		),
		
    	'series'=> array(
        'title' => 'Series',
        'relationship' => 'series', 
        'select' => "(:table).name_chs",
    	),

		'name_chs'=> array(
		'title' => 'Product Name(CHS)',
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
        'name_field' => 'name_chs',
    	),
    	'series'=> array(
        'title' => 'Series',
        'type' => 'relationship',
        'name_field' => 'name_chs',
    	),
    	'reg_num'=> array(
		'title' => 'Registion number',
		),
		'name_chs'=> array(
		'title' => 'Product Name(CHS)',
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
        'name_field' => 'name_chs',
    	),
		
		'series'=> array(
        'title' => 'Series',
        'type' => 'relationship',
        'name_field' => 'name_chs',
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
		
		'name_chs' => array(
		'title' => 'Product Name(CHS)',
		),

		'short_desc_chs' => array(
		'title' => 'Short Description(CHS)',
		),

		'desc_chs' => array(
		'title' => 'Description(CHS)',
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
	

		'pack_size_chs' => array(
		'title' => 'Presentation and Pack Size(CHS)',
		'type' => 'wysiwyg'
		),
			
		'indication_cap_chs' => array(
		'title' => 'Indication Caption(CHS)',
		),	
			'indication_remark_chs'=> array(
		'title' => 'Indication Remark(CHS)',
		),
			
		'indications'=> array(
		'type' => 'relationship',
		'title' => 'Indication',
		'name_field' => 'indication_chs',
 
		),	
			
	
		'administration_chs' => array(
		'title' => 'Dosage and Administration(CHS)',
		'type' => 'wysiwyg'
		),
		
	
		'ingredient_chs' => array(
		'title' => 'Active ingredient(CHS)',
		'type' => 'wysiwyg'
		),
		
	
		'caution_chs' => array(
		'title' => 'Caution(CHS)',
		'type' => 'wysiwyg'
		),
		
	
		'storage_chs' => array(
		'title' => 'Storage and Packaging Safety(CHS)',
	'type' => 'wysiwyg'
		),
		

	),

);