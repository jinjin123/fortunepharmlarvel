<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Burning Heart(CHT)',

	'single' => 'healthtipsix',

	'model' => 'Healthtipsix',
	
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

    'label1_cht' => 'required',
	'label2_cht' => 'required',
	'label3_cht' => 'required',
	'label4_cht' => 'required',
	'label5_cht' => 'required',
	'label6_cht' => 'required',
	'label7_cht' => 'required',
	'label8_cht' => 'required',
	'label9_cht' => 'required',

	'detail1_cht' => 'required',
	'detail2_cht' => 'required',
	'detail2_cht' => 'required',
	'detail4_cht' => 'required',
	'detail5_cht' => 'required',
	'detail6_cht' => 'required',
	'detail7_cht' => 'required',
	'detail8_cht' => 'required',
	'detail9_cht' => 'required',

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
		'intro1_cht'=> array(
		'title' => 'Introduction  (CHT)',
		),
		'label1_cht'=> array(
		'title' => 'Label 少食多餐為原則 (CHT)',
		),
		'detail1_cht'=> array(
		'title' => 'Detail 少食多餐為原則 (CHT)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_cht'=> array(
		'title' => 'Introduction  (CHT)',
		),
		'label1_cht'=> array(
		'title' => 'Label 少食多餐為原則 (CHT)',
		),
		'detail1_cht'=> array(
		'title' => 'Detail 少食多餐為原則 (CHT)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro  **/
		'intro1_cht'=> array(
		'title' => 'Introduction  (CHT)',
		'type'=>'textarea',
		),
		
		
		/** Part-2 Label + Detail **/
		
		
		/**少食多餐為原則 **/
		'label1_cht'=> array(
		'title' => 'Label 少食多餐為原則 (CHT)',
		),
		
		'detail1_cht'=> array(
		'title' => 'Detail 少食多餐為原則 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/**避免油膩或辛辣的食物 **/
		'label2_cht'=> array(
		'title' => 'Label 避免油膩或辛辣的食物 (CHT)',
		),
		
		'detail2_cht'=> array(
		'title' => 'Detail 避免油膩或辛辣的食物 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/**減少刺激成份飲品 **/
		'label3_cht'=> array(
		'title' => 'Label 減少刺激成份飲品 (CHT)',
		),
	
		'detail3_cht'=> array(
		'title' => 'Detail 減少刺激成份飲品 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/**戒煙 **/
		'label4_cht'=> array(
		'title' => 'Label 戒煙 (CHT)',
		),
		
		'detail4_cht'=> array(
		'title' => 'Detail 戒煙 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/**做運動減肥 **/
		'label5_cht'=> array(
		'title' => 'Label 做運動減肥 (CHT)',
		),
		
		'detail5_cht'=> array(
		'title' => 'Detail 做運動減肥 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/**不要過份進食 **/
		'label6_cht'=> array(
		'title' => 'Label 不要過份進食 (CHT)',
		),
		
		'detail6_cht'=> array(
		'title' => 'Detail 不要過份進食 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/**把枕頭升高睡 **/
		'label7_cht'=> array(
		'title' => 'Label 把枕頭升高睡 (CHT)',
		),
		
		'detail7_cht'=> array(
		'title' => 'Detail 把枕頭升高睡 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/**飲水沖淡胃酸的濃度 **/
		'label8_cht'=> array(
		'title' => 'Label 飲水沖淡胃酸的濃度 (CHT)',
		),
		
		'detail8_cht'=> array(
		'title' => 'Detail 飲水沖淡胃酸的濃度 (CHT)',
		'type' => 'wysiwyg'
		),
		
		/**不要穿緊身衣及腰帶 **/
		'label9_cht'=> array(
		'title' => 'Label 不要穿緊身衣及腰帶 (CHT)',
		),
		
		'detail9_cht'=> array(
		'title' => 'Detail 不要穿緊身衣及腰帶 (CHT)',
		'type' => 'wysiwyg'
		),
		
	
		
		

	),

);