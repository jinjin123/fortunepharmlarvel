<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Allergies and Sensitive(CHT)',

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
	
    'intro1_cht' => 'required',
    'intro2_cht' => 'required',
    
    'label1_cht' => 'required',
	'label2_cht' => 'required',
	'label3_cht' => 'required',
	'label4_cht' => 'required',
	'label5_cht' => 'required',
	'label6_cht' => 'required',
	'label7_cht' => 'required',
	'label8_cht' => 'required',
	'label9_cht' => 'required',
	'label10_cht' => 'required',
	
	'detail1_cht' => 'required',
	'detail2_cht' => 'required',
	'detail2_cht' => 'required',
	'detail4_cht' => 'required',
	'detail5_cht' => 'required',
	'detail6_cht' => 'required',
	'detail7_cht' => 'required',
	'detail8_cht' => 'required',
	'detail9_cht' => 'required',
	'detail10_cht' => 'required',
	'detail11_cht' => 'required',
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
		'intro1_cht'=> array(
		'title' => 'Introduction  1 (CHT)',
		),
		'label1_cht'=> array(
		'title' => 'Label 浴室 - 要減少霉菌滋長 (CHT)',
		),
		'detail2_cht'=> array(
		'title' => 'Detail 浴室 - 要減少霉菌滋長 (CHT)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_cht'=> array(
		'title' => 'Introduction  1 (CHT)',
		),
		'label1_cht'=> array(
		'title' => 'Label 浴室 - 要減少霉菌滋長 (CHT)',
		),
		'detail2_cht'=> array(
		'title' => 'Detail 浴室 - 要減少霉菌滋長 (CHT)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro + Detail **/

		'intro1_cht'=> array(
		'title' => 'Introduction  1 (CHT)',
		'type'=>'textarea',
		),
		


		'detail1_cht'=> array(
		'title' => 'Detail 1 (cht)',
		'type' => 'wysiwyg'
		),

		/** Part-2 Intro + Label + Detail **/
	
		'intro2_cht'=> array(
		'title' => 'Introduction  2 (CHT)',
		'type'=>'textarea',
		),
		
		
		/** 浴室 - 要減少霉菌滋長 **/
		'label1_cht'=> array(
		'title' => 'Label 浴室 - 要減少霉菌滋長 (CHT)',
		),
		
		'detail2_cht'=> array(
		'title' => 'Detail 浴室 - 要減少霉菌滋長 (CHT)',
		'type' => 'wysiwyg'
		),
		
		
		/** 流浴室 - 保持室內通風  **/
		'label2_cht'=> array(
		'title' => 'Label 浴室 - 保持室內通風 (CHT)',
		),
	
		'detail3_cht'=> array(
		'title' => 'Detail 浴室 - 保持室內通風(CHT)',
		'type' => 'wysiwyg'
		),
		
		/** 浴室 - 減少室內塵埃 **/
		'label3_cht'=> array(
		'title' => 'Label 浴室 - 減少室內塵埃 (CHT)',
		),
	
		'detail4_cht'=> array(
		'title' => 'Detail 浴室 - 減少室內塵埃(CHT)',
		'type' => 'wysiwyg'
		),
		
		/** 浴室 - 定時清洗  **/
		'label4_cht'=> array(
		'title' => 'Label 浴室 - 定時清洗 (CHT)',
		),
		
		'detail5_cht'=> array(
		'title' => 'Detail 浴室 - 定時清洗 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/** 客廳 - 經常幫動物梳洗  **/
		'label5_cht'=> array(
		'title' => 'Label 客廳 - 經常幫動物梳洗(CHT)',
		),
		
		'detail6_cht'=> array(
		'title' => 'Detail 客廳 - 經常幫動物梳洗 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/** 客廳 - 選用短毛地毯  **/
		'label6_cht'=> array(
		'title' => 'Label 客廳 - 選用短毛地毯 (CHT)',
		),
		
		'detail7_cht'=> array(
		'title' => 'Detail 客廳 - 選用短毛地毯 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/** 客廳 - 不讓寵物走上傢俱  **/
		'label7_cht'=> array(
		'title' => 'Label 客廳 - 不讓寵物走上傢俱 (CHT)',
		),
		
		'detail8_cht'=> array(
		'title' => 'Detail 客廳 - 不讓寵物走上傢俱 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/** 睡房 - 清洗床單和被單  **/
		'label8_cht'=> array(
		'title' => 'Label 睡房 - 清洗床單和被單 (CHT)',
		),
		
		'detail9_cht'=> array(
		'title' => 'Detail 睡房 - 清洗床單和被單 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/** 睡房 - 清潔雜物  **/
		'label9_cht'=> array(
		'title' => 'Label 睡房 - 清潔雜物(CHT)',
		),
		
		'detail10_cht'=> array(
		'title' => 'Detail 睡房 - 清潔雜物 (CHT)',
		'type' => 'wysiwyg'
		),
		
		
		/** 睡房 - 挑選床單及枕頭套  **/
		'label10_cht'=> array(
		'title' => 'Label 睡房 - 挑選床單及枕頭套(CHT)',
		),
		
		'detail11_cht'=> array(
		'title' => 'Detail 睡房 - 挑選床單及枕頭套 (CHT)',
		'type' => 'wysiwyg'
		),
		
	),

);