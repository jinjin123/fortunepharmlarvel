<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Allergies and Sensitive(ENG)',

	'single' => 'healthtipfive',

	'model' => 'Healthtipfive',
	
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
	'label8_eng' => 'required',
	'label9_eng' => 'required',
	'label10_eng' => 'required',
	
	'detail1_eng' => 'required',
	'detail2_eng' => 'required',
	'detail2_eng' => 'required',
	'detail4_eng' => 'required',
	'detail5_eng' => 'required',
	'detail6_eng' => 'required',
	'detail7_eng' => 'required',
	'detail8_eng' => 'required',
	'detail9_eng' => 'required',
	'detail10_eng' => 'required',
	'detail11_eng' => 'required',
	),
	
	/*Messages
	'messages' => array(
	'name_eng' => 'The Market(chs) is required',
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
		'title' => 'Introduction  1 (ENG)',
		),
		'label1_eng'=> array(
		'title' => 'Label 浴室 - 要減少霉菌滋長 (ENG)',
		),
		'detail2_eng'=> array(
		'title' => 'Detail 浴室 - 要減少霉菌滋長 (ENG)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_eng'=> array(
		'title' => 'Introduction  1 (ENG)',
		),
		'label1_eng'=> array(
		'title' => 'Label 浴室 - 要減少霉菌滋長 (ENG)',
		),
		'detail2_eng'=> array(
		'title' => 'Detail 浴室 - 要減少霉菌滋長 (ENG)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro + Detail **/

		'intro1_eng'=> array(
		'title' => 'Introduction  1 (ENG)',
		'type'=>'textarea',
		),
		


		'detail1_eng'=> array(
		'title' => 'Detail 1 (ENG)',
		'type' => 'wysiwyg'
		),

		/** Part-2 Intro + Label + Detail **/
	
		'intro2_eng'=> array(
		'title' => 'Introduction  2 (ENG)',
		'type'=>'textarea',
		),
		
		
		/** 浴室 - 要減少霉菌滋長 **/
		'label1_eng'=> array(
		'title' => 'Label 浴室 - 要減少霉菌滋長 (ENG)',
		),
		
		'detail2_eng'=> array(
		'title' => 'Detail 浴室 - 要減少霉菌滋長 (ENG)',
		'type' => 'wysiwyg'
		),
		
		
		/** 流浴室 - 保持室內通風  **/
		'label2_eng'=> array(
		'title' => 'Label 浴室 - 保持室內通風 (ENG)',
		),
	
		'detail3_eng'=> array(
		'title' => 'Detail 浴室 - 保持室內通風(ENG)',
		'type' => 'wysiwyg'
		),
		
		/** 浴室 - 減少室內塵埃 **/
		'label3_eng'=> array(
		'title' => 'Label 浴室 - 減少室內塵埃 (ENG)',
		),
	
		'detail4_eng'=> array(
		'title' => 'Detail 浴室 - 減少室內塵埃(ENG)',
		'type' => 'wysiwyg'
		),
		
		/** 浴室 - 定時清洗  **/
		'label4_eng'=> array(
		'title' => 'Label 浴室 - 定時清洗 (ENG)',
		),
		
		'detail5_eng'=> array(
		'title' => 'Detail 浴室 - 定時清洗 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/** 客廳 - 經常幫動物梳洗  **/
		'label5_eng'=> array(
		'title' => 'Label 客廳 - 經常幫動物梳洗(ENG)',
		),
		
		'detail6_eng'=> array(
		'title' => 'Detail 客廳 - 經常幫動物梳洗 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/** 客廳 - 選用短毛地毯  **/
		'label6_eng'=> array(
		'title' => 'Label 客廳 - 選用短毛地毯 (ENG)',
		),
		
		'detail7_eng'=> array(
		'title' => 'Detail 客廳 - 選用短毛地毯 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/** 客廳 - 不讓寵物走上傢俱  **/
		'label7_eng'=> array(
		'title' => 'Label 客廳 - 不讓寵物走上傢俱 (ENG)',
		),
		
		'detail8_eng'=> array(
		'title' => 'Detail 客廳 - 不讓寵物走上傢俱 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/** 睡房 - 清洗床單和被單  **/
		'label8_eng'=> array(
		'title' => 'Label 睡房 - 清洗床單和被單 (ENG)',
		),
		
		'detail9_eng'=> array(
		'title' => 'Detail 睡房 - 清洗床單和被單 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/** 睡房 - 清潔雜物  **/
		'label9_eng'=> array(
		'title' => 'Label 睡房 - 清潔雜物(ENG)',
		),
		
		'detail10_eng'=> array(
		'title' => 'Detail 睡房 - 清潔雜物 (ENG)',
		'type' => 'wysiwyg'
		),
		
		
		/** 睡房 - 挑選床單及枕頭套  **/
		'label10_eng'=> array(
		'title' => 'Label 睡房 - 挑選床單及枕頭套(ENG)',
		),
		
		'detail11_eng'=> array(
		'title' => 'Detail 睡房 - 挑選床單及枕頭套 (ENG)',
		'type' => 'wysiwyg'
		),
		
		

	),

);