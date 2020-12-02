<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Cold & Flu Series(ALL)',

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
		'intro1_eng'=> array(
		'title' => 'Introduction 1 (ENG)',
		),
		'label1_eng'=> array(
		'title' => 'Label 咳嗽 (ENG )',
		),
	
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_eng'=> array(
		'title' => 'Introduction 1 (ENG)',
		),
		'label1_eng'=> array(
		'title' => 'Label 咳嗽 (ENG )',
		),
		'detail2_eng'=> array(
		'title' => 'Detail 咳嗽(ENG)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro + Detail **/
		'intro1_eng'=> array(
		'title' => 'Introduction 1 (ENG)',
		'type'=>'textarea',
		),
		'intro1_cht'=> array(
		'title' => 'Introduction 1 (CHT)',
		'type'=>'textarea',
		),
		'intro1_chs'=> array(
		'title' => 'Introduction 1 (CHS)',
		'type'=>'textarea',
		),
		

		'detail1_eng'=> array(
		'title' => 'Detail 1 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail1_cht'=> array(
		'title' => 'Detail 1 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail1_chs'=> array(
		'title' => 'Detail 1 (CHS)',
		'type' => 'wysiwyg'
		),

		/** Part-2 Intro + Label + Detail **/
		'intro2_eng'=> array(
		'title' => 'Introduction 2 (ENG)',
		'type'=>'textarea',
		),
		'intro2_cht'=> array(
		'title' => 'Introduction 2 (CHT)',
		'type'=>'textarea',
		),
		'intro2_chs'=> array(
		'title' => 'Introduction 2 (CHS)',
		'type'=>'textarea',
		),
		
		
		/** 咳嗽 **/
		'label1_eng'=> array(
		'title' => 'Label 咳嗽 (ENG)',
		),
		'label1_cht'=> array(
		'title' => 'Label 咳嗽 (CHT)',
		),
		'label1_chs'=> array(
		'title' => 'Label 咳嗽 (CHS)',
		),
		
		'detail2_eng'=> array(
		'title' => 'Detail 咳嗽 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail2_cht'=> array(
		'title' => 'Detail 咳嗽 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail2_chs'=> array(
		'title' => 'Detail 咳嗽 (CHS)',
		'type' => 'wysiwyg'
		),
		
		
		/** 流鼻水  **/
		'label2_eng'=> array(
		'title' => 'Label 流鼻水 (ENG)',
		),
		'label2_cht'=> array(
		'title' => 'Label 流鼻水 (CHT)',
		),
		'label2_chs'=> array(
		'title' => 'Label 流鼻水 (CHS)',
		),
		
		'detail3_eng'=> array(
		'title' => 'Detail 流鼻水 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail3_cht'=> array(
		'title' => 'Detail 流鼻水 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail3_chs'=> array(
		'title' => 'Detail 流鼻水 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 鼻塞  **/
		'label3_eng'=> array(
		'title' => 'Label 鼻塞 (ENG)',
		),
		'label3_cht'=> array(
		'title' => 'Label 鼻塞 (CHT)',
		),
		'label3_chs'=> array(
		'title' => 'Label 鼻塞 (CHS)',
		),
		
		'detail4_eng'=> array(
		'title' => 'Detail 鼻塞 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail4_cht'=> array(
		'title' => 'Detail 鼻塞 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail4_chs'=> array(
		'title' => 'Detail 鼻塞 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 頭痛  **/
		'label4_eng'=> array(
		'title' => 'Label 頭痛 (ENG)',
		),
		'label4_cht'=> array(
		'title' => 'Label 頭痛 (CHT)',
		),
		'label4_chs'=> array(
		'title' => 'Label 頭痛 (CHS)',
		),
		
		'detail5_eng'=> array(
		'title' => 'Detail 頭痛 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail5_cht'=> array(
		'title' => 'Detail 頭痛 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail5_chs'=> array(
		'title' => 'Detail 頭痛 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 喉嚨痛  **/
		'label5_eng'=> array(
		'title' => 'Label 喉嚨痛 (ENG)',
		),
		'label5_cht'=> array(
		'title' => 'Label 喉嚨痛 (CHT)',
		),
		'label5_chs'=> array(
		'title' => 'Label 喉嚨痛 (CHS)',
		),
		
		'detail6_eng'=> array(
		'title' => 'Detail 喉嚨痛 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail6_cht'=> array(
		'title' => 'Detail 喉嚨痛 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail6_chs'=> array(
		'title' => 'Detail 喉嚨痛 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 發燒  **/
		'label6_eng'=> array(
		'title' => 'Label 發燒 (ENG)',
		),
		'label6_cht'=> array(
		'title' => 'Label 發燒 (CHT)',
		),
		'label6_chs'=> array(
		'title' => 'Label 發燒 (CHS)',
		),
		
		'detail7_eng'=> array(
		'title' => 'Detail 發燒 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail7_cht'=> array(
		'title' => 'Detail 發燒 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail7_chs'=> array(
		'title' => 'Detail 發燒 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 身體疼痛  **/
		'label7_eng'=> array(
		'title' => 'Label 身體疼痛 (ENG)',
		),
		'label7_cht'=> array(
		'title' => 'Label 身體疼痛 (CHT)',
		),
		'label7_chs'=> array(
		'title' => 'Label 身體疼痛 (CHS)',
		),
		
		'detail8_eng'=> array(
		'title' => 'Detail 身體疼痛 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail8_cht'=> array(
		'title' => 'Detail 身體疼痛 (CHT)',
		'type' => 'wysiwyg'
		),
		'detail8_chs'=> array(
		'title' => 'Detail 身體疼痛 (CHS)',
		'type' => 'wysiwyg'
		),
		
		

	),

);