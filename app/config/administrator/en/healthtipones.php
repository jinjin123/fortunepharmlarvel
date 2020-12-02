<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Cold & Flu Series(ENG)',

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
    
    'label1_eng' => 'required',
	'label2_eng' => 'required',
	'label3_eng' => 'required',
	'label4_eng' => 'required',
	'label5_eng' => 'required',
	'label6_eng' => 'required',
	'label7_eng' => 'required',
	
	'detail1_eng' => 'required',
	'detail2_eng' => 'required',
	'detail2_eng' => 'required',
	'detail4_eng' => 'required',
	'detail5_eng' => 'required',
	'detail6_eng' => 'required',
	'detail7_eng' => 'required',
	'detail8_eng' => 'required',
	),
	
	/*Messages
	'messages' => array(
	'name_eng' => 'The Market(eng) is required',
	'name_cht' => 'The Market(CHT) is required',
	'name_eng' => 'The Market(eng) is required'
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
		'title' => 'Label 咳嗽 (ENG)',
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
		'title' => 'Label 咳嗽 (ENG)',
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
		
		'detail1_eng'=> array(
		'title' => 'Detail 1 (ENG)',
		'type' => 'wysiwyg'
		),

		/** Part-2 Intro + Label + Detail **/
		'intro2_eng'=> array(
		'title' => 'Introduction 2 (ENG)',
		'type'=>'textarea',
		),
		
		
		/** 咳嗽 **/
		'label1_eng'=> array(
		'title' => 'Label 咳嗽 (ENG)',
		),
		
		'detail2_eng'=> array(
		'title' => 'Detail 咳嗽 (ENG)',
		'type' => 'wysiwyg'
		),
		
		
		/** 流鼻水  **/
		'label2_eng'=> array(
		'title' => 'Label 流鼻水 (ENG)',
		),
		
		'detail3_eng'=> array(
		'title' => 'Detail 流鼻水 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/** 鼻塞  **/
		'label3_eng'=> array(
		'title' => 'Label 鼻塞 (ENG)',
		),
		
		'detail4_eng'=> array(
		'title' => 'Detail 鼻塞 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/** 頭痛  **/
		'label4_eng'=> array(
		'title' => 'Label 頭痛 (ENG)',
		),
		
		'detail5_eng'=> array(
		'title' => 'Detail 頭痛 (ENG)',
		'type' => 'wysiwyg'
		),
		
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