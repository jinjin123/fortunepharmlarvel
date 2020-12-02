<?php



return array(

	'title' => 'Healthcare Series >>> Markets(CHS)',

	'single' => 'market',

	'model' => 'Market',
	
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
	
	/*Rules*/
	'rules' => array(
  
	'name_chs' => 'required'
	),
	
	/*Messages*/
	'messages' => array(

	'name_chs' => 'The Market(CHS) is required'
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
	
		'name_chs' => array(
		'title' => 'Market Name(CHS)',
		),
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(

		'name_chs' => array(
		'title' => 'Market Name(CHS)',
		),

	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(

		'name_chs' => array(
		'title' => 'Market Name(CHS)',
		),

	),

);