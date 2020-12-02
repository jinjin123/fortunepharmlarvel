<?php

/**
 * Images model config
 */

return array(

	'title' => 'Products >>> Products(ALL)',

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
 	'name_cht' => 'required',
 	'name_chs' => 'required',
	'short_desc_eng' => 'required',
	'short_desc_cht' => 'required',
	'short_desc_chs' => 'required',
	'desc_eng' => 'required',
	'desc_cht' => 'required',
	'desc_chs' => 'required',
	'pack_size_eng' => 'required',
	'pack_size_cht' => 'required',
	'pack_size_chs' => 'required',
	'administration_eng' => 'required',
	'administration_cht' => 'required',
	'administration_chs' => 'required',
	'ingredient_eng' => 'required',
	'ingredient_cht' => 'required',
	'ingredient_chs' => 'required',
	'caution_eng' => 'required',
	'caution_cht' => 'required',
	'caution_chs' => 'required',
	'storage_eng' => 'required',
	'storage_cht' => 'required',
	'storage_chs' => 'required',
	'main_series' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
	'name_eng.required' => 'The Name(ENG) is required',
	'name_cht.required' => 'The Name(CHT) is required',
	'name_chs.required' => 'The Name(CHS) is required',
	'short_desc_eng.required' => 'The Short description(ENG) is required',
	'short_desc_cht.required' => 'The Short description(CHT) is required',
	'short_desc_chs.required' => 'The Short description(CHS) is required',
	'desc_eng.required' => 'The Description(ENG) is required',
	'desc_cht.required' => 'The Description(CHT) is required',
	'desc_chs.required' => 'The Description(CHS) is required',
	'pack_size_eng.required' => 'The Pack size(ENG) is required',
	'pack_size_cht.required' => 'The Pack size(CHT) is required',
	'pack_size_chs.required' => 'The Pack size(CHS) is required',
	'administration_eng.required' => 'The Short Description(ENG) is required',
		'administration_cht.required' => 'The Short Description(CHT) is required',
			'administration_chs.required' => 'The Short Description(CHS) is required',
	'ingredient_eng.required' => 'The Dosage and Administration (ENG) is required',
	'ingredient_cht.required' => 'The Dosage and Administration (CHT) is required',
	'ingredient_chs.required' => 'The Dosage and Administration (CHS) is required',
	'caution_eng.required' => 'The Caution (ENG) is required',
	'caution_cht.required' => 'The Caution (CHT) is required',
	'caution_chs.required' => 'The Caution (CHS) is required',
	'storage_eng.required' => 'The Storage and Packaging Safety (ENG) is equired',
		'storage_cht.required' => 'The Storage and Packaging Safety (CHT) is equired',
			'storage_chs.required' => 'The Storage and Packaging Safety (CHS) is equired',
			'main_series.required' => 'Main Series is equired',
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
        'title' => 'Order (Descending)',
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

		'store_description_eng'=> array(
        	'title' => 'Store Description(ENG)'
    	),

		'store_description_cht'=> array(
        	'title' => 'Store Description(CHT)'
    	),

		'store_description_chs'=> array(
        	'title' => 'Store Description(CHS)'
    	),

		'store_linkage_eng'=> array(
        	'title' => 'Store Linkage(ENG)'
    	),

		'store_linkage_cht'=> array(
        	'title' => 'Store Linkage(CHT)'
    	),

		'store_linkage_chs'=> array(
        	'title' => 'Store Linkage(CHS)'
    	),

		'main_series'=> array(
		'title' => 'Normal / Children Series',
		 'type' => 'enum',
		  'options' => array(
        'Normal Series' => 'Normal Series',
        'Children Series' => 'Children Series'
  
		)),
		
	
		
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
			
		'name_eng'=> array(
		'title' => 'Product Name(ENG)',
		),
		'name_cht' => array(
		'title' => 'Product Name(CHT)',
		),
		'name_chs' => array(
		'title' => 'Product Name(CHS)',
		),
		'short_desc_eng'=> array(
		'title' => 'Short Description(ENG)',
		),
		'short_desc_cht' => array(
		'title' => 'Short Description(CHT)',
		),
		'short_desc_chs' => array(
		'title' => 'Short Description(CHS)',
		),
		'desc_eng'=> array(
		'title' => 'Description(ENG)',
		'type' => 'wysiwyg'
		),
		'desc_cht' => array(
		'title' => 'Description(CHT)',
		'type' => 'wysiwyg'
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
	
		'pack_size_eng'=> array(
		'title' => 'Presentation and Pack Size(ENG)',
	'type' => 'wysiwyg'
		),
		'pack_size_cht' => array(
		'title' => 'Presentation and Pack Size(CHT)',
		'type' => 'wysiwyg'
		),
		'pack_size_chs' => array(
		'title' => 'Presentation and Pack Size(CHS)',
		'type' => 'wysiwyg'
		),
		
		'indication_cap_eng'=> array(
		'title' => 'Indication Caption(ENG)',
		),
		'indication_cap_cht' => array(
		'title' => 'Indication Caption(CHT)',
		),
		'indication_cap_chs' => array(
		'title' => 'Indication Caption(CHS)',
		),
		
		'indication_remark_eng'=> array(
		'title' => 'Indication Remark(ENG)',
		),
		'indication_remark_cht' => array(
		'title' => 'Indication Remark(CHT)',
		),
		'indication_remark_chs' => array(
		'title' => 'Indication Remark(CHS)',
		),

		'indications'=> array(
		'type' => 'relationship',
		'title' => 'Indication',
		'name_field' => 'indication_eng',
 
		),	
			
		'administration_eng'=> array(
		'title' => 'Dosage and Administration(ENG)',
		'type' => 'wysiwyg'
		),
		'administration_cht' => array(
		'title' => 'Dosage and Administration(CHT)',
		'type' => 'wysiwyg'
		),
		'administration_chs' => array(
		'title' => 'Dosage and Administration(CHS)',
		'type' => 'wysiwyg'
		),
		
		'ingredient_eng'=> array(
		'title' => 'Active ingredient(ENG)',
		'type' => 'wysiwyg'
		),
		'ingredient_cht' => array(
		'title' => 'Active ingredient(CHT)',
		'type' => 'wysiwyg'
		),
		'ingredient_chs' => array(
		'title' => 'Active ingredient(CHS)',
		'type' => 'wysiwyg'
		),
		
		'caution_eng'=> array(
		'title' => 'Caution(ENG)',
		'type' => 'wysiwyg'
		),
		'caution_cht' => array(
		'title' => 'Caution(CHT)',
		'type' => 'wysiwyg'
		),
		'caution_chs' => array(
		'title' => 'Caution(CHS)',
		'type' => 'wysiwyg'
		),
		
		'storage_eng'=> array(
		'title' => 'Storage and Packaging Safety(ENG)',
		'type' => 'wysiwyg'
		),
		'storage_cht' => array(
		'title' => 'Storage and Packaging Safety(CHT)',
		'type' => 'wysiwyg'
		),
		'storage_chs' => array(
		'title' => 'Storage and Packaging Safety(CHS)',
	'type' => 'wysiwyg'
		),

		'seo'=> array(
        	'title' => 'SEO Keyword'
    	)
		

	),

);