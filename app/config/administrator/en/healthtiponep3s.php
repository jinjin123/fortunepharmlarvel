<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Cold & Flu Series Right Column(ENG)',

	'single' => 'healthtiponep3',

	'model' => 'Healthtiponep3',
	
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
    'intro2_eng' => 'required',
     'intro1_cht' => 'required',
    'intro2_cht' => 'required',
     'intro1_chs' => 'required',
    'intro2_chs' => 'required',
    
    'label1_eng' => 'required',
	'label2_eng' => 'required',
	'label3_eng' => 'required',
	'label4_eng' => 'required',
	'label5_eng' => 'required',
	'label6_eng' => 'required',
	'label7_eng' => 'required',
	
	'label1_cht' => 'required',
	'label2_cht' => 'required',
	'label3_cht' => 'required',
	'label4_cht' => 'required',
	'label5_cht' => 'required',
	'label6_cht' => 'required',
	'label7_cht' => 'required',
	
	'label1_chs' => 'required',
	'label2_chs' => 'required',
	'label3_chs' => 'required',
	'label4_chs' => 'required',
	'label5_chs' => 'required',
	'label6_chs' => 'required',
	'label7_chs' => 'required',
	
	'detail1_eng' => 'required',
	'detail2_eng' => 'required',
	'detail2_eng' => 'required',
	'detail4_eng' => 'required',
	'detail5_eng' => 'required',
	'detail6_eng' => 'required',
	'detail7_eng' => 'required',
	'detail8_eng' => 'required',
	
	'detail1_cht' => 'required',
	'detail2_cht' => 'required',
	'detail2_cht' => 'required',
	'detail4_cht' => 'required',
	'detail5_cht' => 'required',
	'detail6_cht' => 'required',
	'detail7_cht' => 'required',
	'detail8_cht' => 'required',
	
	'detail1_chs' => 'required',
	'detail2_chs' => 'required',
	'detail2_chs' => 'required',
	'detail4_chs' => 'required',
	'detail5_chs' => 'required',
	'detail6_chs' => 'required',
	'detail7_chs' => 'required',
	'detail8_chs' => 'required',
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
	
		'label5_eng'=> array(
		'title' => 'Label 喉嚨痛 (ENG)',
		),
	
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'label5_eng'=> array(
		'title' => 'Label 喉嚨痛 (ENG)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		
		/** 喉嚨痛  **/
		'label5_eng'=> array(
		'title' => 'Label 喉嚨痛 (ENG)',
		),
	
		
		'detail6_eng'=> array(
		'title' => 'Detail 喉嚨痛 (ENG)',
		'type' => 'wysiwyg'
		),

		
		/** 發燒  **/
		'label6_eng'=> array(
		'title' => 'Label 發燒 (ENG)',
		),

		
		'detail7_eng'=> array(
		'title' => 'Detail 發燒 (ENG)',
		'type' => 'wysiwyg'
		),

		/** 身體疼痛  **/
		'label7_eng'=> array(
		'title' => 'Label 身體疼痛 (ENG)',
		),

		
		'detail8_eng'=> array(
		'title' => 'Detail 身體疼痛 (ENG)',
		'type' => 'wysiwyg'
		),

		
		

	),

);