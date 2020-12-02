<?php



return array(

	'title' => 'Healthcare Series >>> Healthcare Product(ALL)',

	'single' => 'healthcare',

	'model' => 'Healthcare',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button
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
	**/
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
	),
	
	/*Messages*/
	'messages' => array(
	'name_eng.required' => 'The Product Name(ENG) is required',
	'name_cht.required' => 'The Product Name(CHT) is required',
	'name_chs.required' => 'The Product Name(CHS) is required',
	'short_desc_eng.required' => 'The Short Description(ENG) is required',
	'short_desc_cht.required' => 'The Short Description(CHT) is required',
	'short_desc_chs.required' => 'The Short Description(CHS) is required',
	'desc_eng.required' => 'The Description(ENG) is required',
	'desc_cht.required' => 'The Description(CHT) is required',
	'desc_chs.required' => 'The Description(CHS) is required',
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
		
		'name_eng' => array(
		'title' => 'Product Name(ENG)',
		),
	'short_desc_eng' => array(
		'title' => 'Short Description(ENG)',
		),
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(

	'markets'=> array(
        'title' => 'Market',
        'type' => 'relationship',
        'name_field' => 'name_eng',
    	),
	'name_eng' => array(
		'title' => 'Product Name(ENG)',
		),
			'short_desc_eng' => array(
		'title' => 'Short Description(ENG)',
		),
		
	'order_seq'=> array(
        'title' => 'Order',
    	),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
	
		'markets'=> array(
        'title' => 'Market',
        'type' => 'relationship',
        'name_field' => 'name_eng',
    	),
    	
    	'order_seq'=> array(
        'title' => 'Order',
    	),

		'name_eng' => array(
		'title' => 'Product Name(ENG)',
		),
		'name_cht' => array(
		'title' => 'Product Name(CHT)',
		),
		'name_chs' => array(
		'title' => 'Product Name(CHS)',
		),
		
		'product_img' => array(
  		'title' => 'Product Image',
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
	
		
		
		'short_desc_eng' => array(
		'title' => 'Short Description(ENG)',
		),
		'short_desc_cht' => array(
		'title' => 'Short Description(CHT)',
		),
		'short_desc_chs' => array(
		'title' => 'Short Description(CHS)',
		),
		'desc_eng' => array(
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

	),

);