<?php



return array(

	'title' => 'Healthcare Series >>> Healthcare Product(CHT)',

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
  
	
	'name_cht' => 'required',

	
	'short_desc_cht' => 'required',


	'desc_cht' => 'required',

	),
	
	/*Messages*/
	'messages' => array(

	'name_cht.required' => 'The Product Name(CHT) is required',
	
	'short_desc_cht.required' => 'The Short Description(CHT) is required',

	'desc_cht.required' => 'The Description(CHT) is required',

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
		
		'name_cht' => array(
		'title' => 'Product Name(CHT)',
		),
	'short_desc_cht' => array(
		'title' => 'Short Description(CHT)',
		),
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(

	'markets'=> array(
        'title' => 'Market',
        'type' => 'relationship',
        'name_field' => 'name_cht',
    	),
	'name_cht' => array(
		'title' => 'Product Name(CHT)',
		),
			'short_desc_cht' => array(
		'title' => 'Short Description(CHT)',
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
        'name_field' => 'name_cht',
    	),
    	
    	'order_seq'=> array(
        'title' => 'Order',
    	),

		'name_cht' => array(
		'title' => 'Product Name(CHT)',
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
	
		
		

		'short_desc_cht' => array(
		'title' => 'Short Description(CHT)',
		),
	
	
		'desc_cht' => array(
		'title' => 'Description(CHT)',
		'type' => 'wysiwyg'
		),


	),

);