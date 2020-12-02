<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Children Cold & Flu Left Column(ALL)',

	'single' => 'healthtiptwop2',

	'model' => 'Healthtiptwop2',
	
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

		'detail1_eng'=> array(
		'title' => 'Detail 流鼻水/鼻塞 (ENG)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(

		'detail1_eng'=> array(
		'title' => 'Detail 流鼻水/鼻塞 (ENG)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		
		
	
		/** Part-2 Detail **/
		'detail1_eng'=> array(
		'title' => 'Detail 流鼻水/鼻塞 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail1_cht'=> array(
		'title' => 'Detail 流鼻水/鼻塞 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail1_chs'=> array(
		'title' => 'Detail 流鼻水/鼻塞 (CHS)',
		'type' => 'wysiwyg'
		),

		'detail2_eng'=> array(
		'title' => 'Detail 打噴嚏/咳嗽 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail2_cht'=> array(
		'title' => 'Detail 打噴嚏/咳嗽 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail2_chs'=> array(
		'title' => 'Detail 打噴嚏/咳嗽 (CHS)',
		'type' => 'wysiwyg'
		),
		
		'detail3_eng'=> array(
		'title' => 'Detail 喉嚨痛 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail3_cht'=> array(
		'title' => 'Detail 喉嚨痛 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail3_chs'=> array(
		'title' => 'Detail 喉嚨痛 (CHS)',
		'type' => 'wysiwyg'
		),
	
		

		

	),

);