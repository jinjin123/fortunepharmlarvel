<?php



return array(

	'title' => 'Sympton Checker >>> Sympton Checker Indication(ALL)',

	'single' => 'fixedindication',

	'model' => 'Fixedindication',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button	**/
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
	),
	*/
	/*Messages
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
	
		'indication_eng' => array(
    	'title' => "Product take indication(ENG)",
		),
		'indication_cht' => array(
    	'title' => "Product take indication(CHT)",
		),
		'indication_chs' => array(
    	'title' => "Product take indication(CHS)",
		),
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(

		'indication_eng' => array(
    	'title' => "Product take indication(ENG)",
		),
		'indication_cht' => array(
    	'title' => "Product take indication(CHT)",
		),
		'indication_chs' => array(
    	'title' => "Product take indication(CHS)",
		),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
	
		'indication_eng' => array(
    	'title' => "Product take indication(ENG)",
		),
		'indication_cht' => array(
    	'title' => "Product take indication(CHT)",
		),
		'indication_chs' => array(
    	'title' => "Product take indication(CHS)",
		),

	),

);