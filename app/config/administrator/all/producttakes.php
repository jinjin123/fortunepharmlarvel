<?php

/**
 * Images model config
 */

return array(

	'title' => 'Sympton Checker >>> Products(ALL)',

	'single' => 'product',

	'model' => 'Product',
	
	'form_width' => 1000,

	/** Disable the Create and Delete button**/
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



	/*Rules
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
	),
	*/
	/*Messages
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
	),
*/
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
		'name_cht'=> array(
		'title' => 'Product Name(CHT)',
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
		
		'fixedindications'=> array(
		'type' => 'relationship',
		'title' => 'Product Take Indication',
		'name_field' => 'indication_eng',
		),	
	
	),

);