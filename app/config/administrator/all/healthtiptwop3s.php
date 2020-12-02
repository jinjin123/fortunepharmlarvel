<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Children Cold & Flu Right Column(ALL)',

	'single' => 'healthtiptwop3',

	'model' => 'Healthtiptwop3',
	
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
	
    'intro1_eng' => 'required',

	'detail1_eng' => 'required',
	'detail2_eng' => 'required',
	'detail2_eng' => 'required',
	'detail4_eng' => 'required',
	'detail5_eng' => 'required',


    'intro1_cht' => 'required',

	'detail1_cht' => 'required',
	'detail2_cht' => 'required',
	'detail2_cht' => 'required',
	'detail4_cht' => 'required',
	'detail5_cht' => 'required',
	
	
	'intro1_chs' => 'required',

	'detail1_chs' => 'required',
	'detail2_chs' => 'required',
	'detail2_chs' => 'required',
	'detail4_chs' => 'required',
	'detail5_chs' => 'required',
	),
	*/
	/*Messages
	'messages' => array(
	'name_eng' => 'The Market(ENG) is required',
	'name_cht' => 'The Market(CHT) is required',
	'name_chs' => 'The Market(CHS) is required'
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
	
		'detail4_eng'=> array(
		'title' => 'Detail 輕微發燒 (ENG)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'detail4_eng'=> array(
		'title' => 'Detail 輕微發燒 (ENG)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		
		'detail4_eng'=> array(
		'title' => 'Detail 輕微發燒 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail4_cht'=> array(
		'title' => 'Detail 輕微發燒 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail4_chs'=> array(
		'title' => 'Detail 輕微發燒 (CHS)',
		'type' => 'wysiwyg'
		),
		
		'detail5_eng'=> array(
		'title' => 'Detail 食慾減退 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail5_cht'=> array(
		'title' => 'Detail 食慾減退 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail5_chs'=> array(
		'title' => 'Detail 食慾減退 (CHS)',
		'type' => 'wysiwyg'
		),
		

	),

);