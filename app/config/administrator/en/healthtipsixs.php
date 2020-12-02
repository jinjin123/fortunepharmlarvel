<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Burning Heart(ENG)',

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
	
    'intro1_eng' => 'required',

    'label1_eng' => 'required',
	'label2_eng' => 'required',
	'label3_eng' => 'required',
	'label4_eng' => 'required',
	'label5_eng' => 'required',
	'label6_eng' => 'required',
	'label7_eng' => 'required',
	'label8_eng' => 'required',
	'label9_eng' => 'required',

	'detail1_eng' => 'required',
	'detail2_eng' => 'required',
	'detail2_eng' => 'required',
	'detail4_eng' => 'required',
	'detail5_eng' => 'required',
	'detail6_eng' => 'required',
	'detail7_eng' => 'required',
	'detail8_eng' => 'required',
	'detail9_eng' => 'required',

	),
	
	/*Messages
	'messages' => array(
	'name_eng' => 'The Market(ENG) is required',
	'name_cht' => 'The Market(CHT) is required',
	'name_eng' => 'The Market(CHS) is required'
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
		'title' => 'Introduction  (ENG)',
		),
		'label1_eng'=> array(
		'title' => 'Label 少食多餐為原則 (ENG)',
		),
		'detail1_eng'=> array(
		'title' => 'Detail 少食多餐為原則 (ENG)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_eng'=> array(
		'title' => 'Introduction  (ENG)',
		),
		'label1_eng'=> array(
		'title' => 'Label 少食多餐為原則 (ENG)',
		),
		'detail1_eng'=> array(
		'title' => 'Detail 少食多餐為原則 (ENG)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro  **/
		'intro1_eng'=> array(
		'title' => 'Introduction   (ENG)',
		'type'=>'textarea',
		),
		
		
		/** Part-2 Label + Detail **/
		
		
		/**少食多餐為原則 **/
		'label1_eng'=> array(
		'title' => 'Label 少食多餐為原則 (ENG)',
		),
		
		'detail1_eng'=> array(
		'title' => 'Detail 少食多餐為原則 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/**避免油膩或辛辣的食物 **/
		'label2_eng'=> array(
		'title' => 'Label 避免油膩或辛辣的食物 (ENG)',
		),
		
		'detail2_eng'=> array(
		'title' => 'Detail 避免油膩或辛辣的食物 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/**減少刺激成份飲品 **/
		'label3_eng'=> array(
		'title' => 'Label 減少刺激成份飲品 (ENG)',
		),
	
		'detail3_eng'=> array(
		'title' => 'Detail 減少刺激成份飲品 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/**戒煙 **/
		'label4_eng'=> array(
		'title' => 'Label 戒煙 (ENG)',
		),
		
		'detail4_eng'=> array(
		'title' => 'Detail 戒煙 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/**做運動減肥 **/
		'label5_eng'=> array(
		'title' => 'Label 做運動減肥 (ENG)',
		),
		
		'detail5_eng'=> array(
		'title' => 'Detail 做運動減肥 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/**不要過份進食 **/
		'label6_eng'=> array(
		'title' => 'Label 不要過份進食 (ENG)',
		),
		
		'detail6_eng'=> array(
		'title' => 'Detail 不要過份進食 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/**把枕頭升高睡 **/
		'label7_eng'=> array(
		'title' => 'Label 把枕頭升高睡 (ENG)',
		),
		
		'detail7_eng'=> array(
		'title' => 'Detail 把枕頭升高睡 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/**飲水沖淡胃酸的濃度 **/
		'label8_eng'=> array(
		'title' => 'Label 飲水沖淡胃酸的濃度 (ENG)',
		),
		
		'detail8_eng'=> array(
		'title' => 'Detail 飲水沖淡胃酸的濃度 (ENG)',
		'type' => 'wysiwyg'
		),
		
		/**不要穿緊身衣及腰帶 **/
		'label9_eng'=> array(
		'title' => 'Label 不要穿緊身衣及腰帶 (ENG)',
		),
		
		'detail9_eng'=> array(
		'title' => 'Detail 不要穿緊身衣及腰帶 (ENG)',
		'type' => 'wysiwyg'
		),
		
	
		
		

	),

);