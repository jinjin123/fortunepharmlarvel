<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Allergies and Sensitive(CHS)',

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
	
    'intro1_chs' => 'required',
    'intro2_chs' => 'required',
    
    'label1_chs' => 'required',
	'label2_chs' => 'required',
	'label3_chs' => 'required',
	'label4_chs' => 'required',
	'label5_chs' => 'required',
	'label6_chs' => 'required',
	'label7_chs' => 'required',
	'label8_chs' => 'required',
	'label9_chs' => 'required',
	'label10_chs' => 'required',
	
	'detail1_chs' => 'required',
	'detail2_chs' => 'required',
	'detail2_chs' => 'required',
	'detail4_chs' => 'required',
	'detail5_chs' => 'required',
	'detail6_chs' => 'required',
	'detail7_chs' => 'required',
	'detail8_chs' => 'required',
	'detail9_chs' => 'required',
	'detail10_chs' => 'required',
	'detail11_chs' => 'required',
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
		'title' => 'Introduction  1 (CHS)',
		),
		'label1_chs'=> array(
		'title' => 'Label 浴室 - 要減少霉菌滋長 (CHS)',
		),
		'detail2_chs'=> array(
		'title' => 'Detail 浴室 - 要減少霉菌滋長 (CHS)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_chs'=> array(
		'title' => 'Introduction  1 (CHS)',
		),
		'label1_chs'=> array(
		'title' => 'Label 浴室 - 要減少霉菌滋長 (CHS)',
		),
		'detail2_chs'=> array(
		'title' => 'Detail 浴室 - 要減少霉菌滋長 (CHS)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro + Detail **/

		'intro1_chs'=> array(
		'title' => 'Introduction  1 (CHS)',
		'type'=>'textarea',
		),
		


		'detail1_chs'=> array(
		'title' => 'Detail 1 (CHS)',
		'type' => 'wysiwyg'
		),

		/** Part-2 Intro + Label + Detail **/
	
		'intro2_chs'=> array(
		'title' => 'Introduction  2 (CHS)',
		'type'=>'textarea',
		),
		
		
		/** 浴室 - 要減少霉菌滋長 **/
		'label1_chs'=> array(
		'title' => 'Label 浴室 - 要減少霉菌滋長 (CHS)',
		),
		
		'detail2_chs'=> array(
		'title' => 'Detail 浴室 - 要減少霉菌滋長 (CHS)',
		'type' => 'wysiwyg'
		),
		
		
		/** 流浴室 - 保持室內通風  **/
		'label2_chs'=> array(
		'title' => 'Label 浴室 - 保持室內通風 (CHS)',
		),
	
		'detail3_chs'=> array(
		'title' => 'Detail 浴室 - 保持室內通風(CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 浴室 - 減少室內塵埃 **/
		'label3_chs'=> array(
		'title' => 'Label 浴室 - 減少室內塵埃 (CHS)',
		),
	
		'detail4_chs'=> array(
		'title' => 'Detail 浴室 - 減少室內塵埃(CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 浴室 - 定時清洗  **/
		'label4_chs'=> array(
		'title' => 'Label 浴室 - 定時清洗 (CHS)',
		),
		
		'detail5_chs'=> array(
		'title' => 'Detail 浴室 - 定時清洗 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 客廳 - 經常幫動物梳洗  **/
		'label5_chs'=> array(
		'title' => 'Label 客廳 - 經常幫動物梳洗(CHS)',
		),
		
		'detail6_chs'=> array(
		'title' => 'Detail 客廳 - 經常幫動物梳洗 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 客廳 - 選用短毛地毯  **/
		'label6_chs'=> array(
		'title' => 'Label 客廳 - 選用短毛地毯 (CHS)',
		),
		
		'detail7_chs'=> array(
		'title' => 'Detail 客廳 - 選用短毛地毯 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 客廳 - 不讓寵物走上傢俱  **/
		'label7_chs'=> array(
		'title' => 'Label 客廳 - 不讓寵物走上傢俱 (CHS)',
		),
		
		'detail8_chs'=> array(
		'title' => 'Detail 客廳 - 不讓寵物走上傢俱 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 睡房 - 清洗床單和被單  **/
		'label8_chs'=> array(
		'title' => 'Label 睡房 - 清洗床單和被單 (CHS)',
		),
		
		'detail9_chs'=> array(
		'title' => 'Detail 睡房 - 清洗床單和被單 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/** 睡房 - 清潔雜物  **/
		'label9_chs'=> array(
		'title' => 'Label 睡房 - 清潔雜物(CHS)',
		),
		
		'detail10_chs'=> array(
		'title' => 'Detail 睡房 - 清潔雜物 (CHS)',
		'type' => 'wysiwyg'
		),
		
		
		/** 睡房 - 挑選床單及枕頭套  **/
		'label10_chs'=> array(
		'title' => 'Label 睡房 - 挑選床單及枕頭套(CHS)',
		),
		
		'detail11_chs'=> array(
		'title' => 'Detail 睡房 - 挑選床單及枕頭套 (CHS)',
		'type' => 'wysiwyg'
		),
		
		

	),

);