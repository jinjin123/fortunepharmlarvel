<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Cold & Flu Series(CHT)',

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
	/**
	'rules' => array(
	
    'intro1_cht' => 'required',
    'intro2_cht' => 'required',
    
    'label1_cht' => 'required',
	'label2_cht' => 'required',
	'label3_cht' => 'required',
	'label4_cht' => 'required',
	'label5_cht' => 'required',
	'label6_cht' => 'required',
	'label7_cht' => 'required',
	
	'detail1_cht' => 'required',
	'detail2_cht' => 'required',
	'detail2_cht' => 'required',
	'detail4_cht' => 'required',
	'detail5_cht' => 'required',
	'detail6_cht' => 'required',
	'detail7_cht' => 'required',
	'detail8_cht' => 'required',
	),
	**/
	/*Messages
	'messages' => array(
	'name_cht' => 'The Market(cht) is required',
	'name_cht' => 'The Market(CHT) is required',
	'name_cht' => 'The Market(cht) is required'
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
		'intro1_cht'=> array(
		'title' => 'Introduction 1 (CHT)',
		),
		'label1_cht'=> array(
		'title' => 'Label 咳嗽 (CHT)',
		),
	
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_cht'=> array(
		'title' => 'Introduction 1 (CHT)',
		),
		'label1_cht'=> array(
		'title' => 'Label 咳嗽 (CHT)',
		),
		'detail2_cht'=> array(
		'title' => 'Detail 咳嗽(CHT)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro + Detail **/
	
		'intro1_cht'=> array(
		'title' => 'Introduction 1 (CHT)',
		'type'=>'textarea',
		),
		
		'detail1_cht'=> array(
		'title' => 'Detail 1 (CHT)',
		'type' => 'wysiwyg'
		),

		/** Part-2 Intro + Label + Detail **/
	
		'intro2_cht'=> array(
		'title' => 'Introduction 2 (CHT)',
		'type'=>'textarea',
		),
	
		
		/** 咳嗽 **/
	
		'label1_cht'=> array(
		'title' => 'Label 咳嗽 (CHT)',
		),
		
		'detail2_cht'=> array(
		'title' => 'Detail 咳嗽 (CHT)',
		'type' => 'wysiwyg'
		),
	
		
		/** 流鼻水  **/
	
		'label2_cht'=> array(
		'title' => 'Label 流鼻水 (CHT)',
		),
		
		'detail3_cht'=> array(
		'title' => 'Detail 流鼻水 (CHT)',
		'type' => 'wysiwyg'
		),

		/** 鼻塞  **/

		'label3_cht'=> array(
		'title' => 'Label 鼻塞 (CHT)',
		),
		
		'detail4_cht'=> array(
		'title' => 'Detail 鼻塞 (CHT)',
		'type' => 'wysiwyg'
		),

		/** 頭痛  **/
	
		'label4_cht'=> array(
		'title' => 'Label 頭痛 (CHT)',
		),
		
		'detail5_cht'=> array(
		'title' => 'Detail 頭痛 (CHT)',
		'type' => 'wysiwyg'
		),

		/** 喉嚨痛  **/

		'label5_cht'=> array(
		'title' => 'Label 喉嚨痛 (CHT)',
		),
		
		'detail6_cht'=> array(
		'title' => 'Detail 喉嚨痛 (CHT)',
		'type' => 'wysiwyg'
		),

		/** 發燒  **/
	
		'label6_cht'=> array(
		'title' => 'Label 發燒 (CHT)',
		),
		
		'detail7_cht'=> array(
		'title' => 'Detail 發燒 (CHT)',
		'type' => 'wysiwyg'
		),
	
		/** 身體疼痛  **/

		'label7_cht'=> array(
		'title' => 'Label 身體疼痛 (CHT)',
		),
		
		'detail8_cht'=> array(
		'title' => 'Detail 身體疼痛 (CHT)',
		'type' => 'wysiwyg'
		),
	
	),

);