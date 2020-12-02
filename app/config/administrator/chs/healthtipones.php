<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Cold & Flu Series(CHS)',

	'single' => 'healthtipone',

	'model' => 'Healthtipone',
	
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
	
    'intro1_chs' => 'required',
    'intro2_chs' => 'required',
    
    'label1_chs' => 'required',
	'label2_chs' => 'required',
	'label3_chs' => 'required',
	'label4_chs' => 'required',
	'label5_chs' => 'required',
	'label6_chs' => 'required',
	'label7_chs' => 'required',
	
	'detail1_chs' => 'required',
	'detail2_chs' => 'required',
	'detail2_chs' => 'required',
	'detail4_chs' => 'required',
	'detail5_chs' => 'required',
	'detail6_chs' => 'required',
	'detail7_chs' => 'required',
	'detail8_chs' => 'required',
	),
	
	/*Messages
	'messages' => array(
	'name_chs' => 'The Market(chs) is required',
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
		'intro1_chs'=> array(
		'title' => 'Introduction 1 (CHS)',
		),
		'label1_chs'=> array(
		'title' => 'Label 咳嗽 (CHS)',
		),
	
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_chs'=> array(
		'title' => 'Introduction 1 (CHS)',
		),
		'label1_chs'=> array(
		'title' => 'Label 咳嗽 (CHS)',
		),
		'detail2_chs'=> array(
		'title' => 'Detail 咳嗽(CHS)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro + Detail **/
	
		'intro1_chs'=> array(
		'title' => 'Introduction 1 (CHS)',
		'type'=>'textarea',
		),
		
		'detail1_chs'=> array(
		'title' => 'Detail1 (CHS)',
		'type' => 'wysiwyg'
		),

		/** Part-2 Intro + Label + Detail **/
		'intro2_chs'=> array(
		'title' => 'Introduction 2 (CHS)',
		'type'=>'textarea',
		),
		
		
		/** 咳嗽 **/
		'label1_chs'=> array(
		'title' => 'Label 咳嗽 (CHS)',
		),
		
		'detail2_chs'=> array(
		'title' => 'Detail咳嗽 (CHS)',
		'type' => 'wysiwyg'
		),
		
		
		/** 流鼻水  **/
		'label2_chs'=> array(
		'title' => 'Label 流鼻水 (CHS)',
		),
		
		'detail3_chs'=> array(
		'title' => 'Detail流鼻水 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 鼻塞  **/
		'label3_chs'=> array(
		'title' => 'Label 鼻塞 (CHS)',
		),
		
		'detail4_chs'=> array(
		'title' => 'Detail鼻塞 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 頭痛  **/
		'label4_chs'=> array(
		'title' => 'Label 頭痛 (CHS)',
		),
		
		'detail5_chs'=> array(
		'title' => 'Detail頭痛 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 喉嚨痛  **/
		'label5_chs'=> array(
		'title' => 'Label 喉嚨痛 (CHS)',
		),
		
		'detail6_chs'=> array(
		'title' => 'Detail喉嚨痛 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 發燒  **/
		'label6_chs'=> array(
		'title' => 'Label 發燒 (CHS)',
		),
		
		'detail7_chs'=> array(
		'title' => 'Detail發燒 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 身體疼痛  **/
		'label7_chs'=> array(
		'title' => 'Label 身體疼痛 (CHS)',
		),
		
		'detail8_chs'=> array(
		'title' => 'Detail身體疼痛 (CHS)',
		'type' => 'wysiwyg'
		),
		
	),

);