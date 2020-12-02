<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Burning Heart(CHS)',

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
	
    'intro1_chs' => 'required',

    'label1_chs' => 'required',
	'label2_chs' => 'required',
	'label3_chs' => 'required',
	'label4_chs' => 'required',
	'label5_chs' => 'required',
	'label6_chs' => 'required',
	'label7_chs' => 'required',
	'label8_chs' => 'required',
	'label9_chs' => 'required',

	'detail1_chs' => 'required',
	'detail2_chs' => 'required',
	'detail2_chs' => 'required',
	'detail4_chs' => 'required',
	'detail5_chs' => 'required',
	'detail6_chs' => 'required',
	'detail7_chs' => 'required',
	'detail8_chs' => 'required',
	'detail9_chs' => 'required',

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
		'intro1_chs'=> array(
		'title' => 'Introduction  (CHS)',
		),
		'label1_chs'=> array(
		'title' => 'Label 少食多餐為原則 (CHS)',
		),
		'detail1_chs'=> array(
		'title' => 'Detail 少食多餐為原則 (CHS)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_chs'=> array(
		'title' => 'Introduction  (CHS)',
		),
		'label1_chs'=> array(
		'title' => 'Label 少食多餐為原則 (CHS)',
		),
		'detail1_chs'=> array(
		'title' => 'Detail 少食多餐為原則 (CHS)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro  **/
		'intro1_chs'=> array(
		'title' => 'Introduction   (CHS)',
		'type'=>'textarea',
		),
		
		
		/** Part-2 Label + Detail **/
		
		
		/**少食多餐為原則 **/
		'label1_chs'=> array(
		'title' => 'Label 少食多餐為原則 (CHS)',
		),
		
		'detail1_chs'=> array(
		'title' => 'Detail 少食多餐為原則 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**避免油膩或辛辣的食物 **/
		'label2_chs'=> array(
		'title' => 'Label 避免油膩或辛辣的食物 (CHS)',
		),
		
		'detail2_chs'=> array(
		'title' => 'Detail 避免油膩或辛辣的食物 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**減少刺激成份飲品 **/
		'label3_chs'=> array(
		'title' => 'Label 減少刺激成份飲品 (CHS)',
		),
	
		'detail3_chs'=> array(
		'title' => 'Detail 減少刺激成份飲品 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**戒煙 **/
		'label4_chs'=> array(
		'title' => 'Label 戒煙 (CHS)',
		),
		
		'detail4_chs'=> array(
		'title' => 'Detail 戒煙 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**做運動減肥 **/
		'label5_chs'=> array(
		'title' => 'Label 做運動減肥 (CHS)',
		),
		
		'detail5_chs'=> array(
		'title' => 'Detail 做運動減肥 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**不要過份進食 **/
		'label6_chs'=> array(
		'title' => 'Label 不要過份進食 (CHS)',
		),
		
		'detail6_chs'=> array(
		'title' => 'Detail 不要過份進食 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**把枕頭升高睡 **/
		'label7_chs'=> array(
		'title' => 'Label 把枕頭升高睡 (CHS)',
		),
		
		'detail7_chs'=> array(
		'title' => 'Detail 把枕頭升高睡 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**飲水沖淡胃酸的濃度 **/
		'label8_chs'=> array(
		'title' => 'Label 飲水沖淡胃酸的濃度 (CHS)',
		),
		
		'detail8_chs'=> array(
		'title' => 'Detail 飲水沖淡胃酸的濃度 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**不要穿緊身衣及腰帶 **/
		'label9_chs'=> array(
		'title' => 'Label 不要穿緊身衣及腰帶 (CHS)',
		),
		
		'detail9_chs'=> array(
		'title' => 'Detail 不要穿緊身衣及腰帶 (CHS)',
		'type' => 'wysiwyg'
		),
		
	
		
		

	),

);