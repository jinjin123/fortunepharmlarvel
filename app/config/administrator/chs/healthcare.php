<?php



return array(

	'title' => 'Healthcare Series >>> Healthcare Product(CHS)',

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
  

	'name_chs' => 'required',

	'short_desc_chs' => 'required',

	'desc_chs' => 'required',
	),
	
	/*Messages*/
	'messages' => array(

	'name_chs.required' => 'The Product Name(CHS) is required',

	'short_desc_chs.required' => 'The Short Description(CHS) is required',

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
     	'select' => "(:table).name_chs",
		),
		
		'name_chs' => array(
		'title' => 'Product Name(CHS)',
		),
	'short_desc_chs' => array(
		'title' => 'Short Description(CHS)',
		),
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(

	'markets'=> array(
        'title' => 'Market',
        'type' => 'relationship',
        'name_field' => 'name_chs',
    	),
	'name_chs' => array(
		'title' => 'Product Name(CHS)',
		),
			'short_desc_chs' => array(
		'title' => 'Short Description(CHS)',
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
        'name_field' => 'name_chs',
    	),
    	
    	'order_seq'=> array(
        'title' => 'Order',
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
	
		
		

		'short_desc_chs' => array(
		'title' => 'Short Description(CHS)',
		),

		'desc_chs' => array(
		'title' => 'Description(CHS)',
		'type' => 'wysiwyg'
		),

	),

);