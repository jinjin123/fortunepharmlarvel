<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Burning Heart(ALL)',

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
		'intro1_cht'=> array(
		'title' => 'Introduction   (CHT)',
		'type'=>'textarea',
		),
		'intro1_chs'=> array(
		'title' => 'Introduction   (CHS)',
		'type'=>'textarea',
		),
		
		
		/** Part-2 Label + Detail **/
		
		
		/**少食多餐為原則 **/
		'label1_eng'=> array(
		'title' => 'Label 少食多餐為原則(ENG)',
		),
		'label1_cht'=> array(
		'title' => 'Label 少食多餐為原則 (CHT)',
		),
		'label1_chs'=> array(
		'title' => 'Label 少食多餐為原則 (CHS)',
		),
		
		'detail1_eng'=> array(
		'title' => 'Detail 少食多餐為原則 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail1_cht'=> array(
		'title' => 'Detail 少食多餐為原則(CHT)',
		'type' => 'wysiwyg'
		),
		'detail1_chs'=> array(
		'title' => 'Detail 少食多餐為原則 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**避免油膩或辛辣的食物 **/
		'label2_eng'=> array(
		'title' => 'Label 避免油膩或辛辣的食物(ENG)',
		),
		'label2_cht'=> array(
		'title' => 'Label 避免油膩或辛辣的食物 (CHT)',
		),
		'label2_chs'=> array(
		'title' => 'Label 避免油膩或辛辣的食物 (CHS)',
		),
		
		'detail2_eng'=> array(
		'title' => 'Detail 避免油膩或辛辣的食物 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail2_cht'=> array(
		'title' => 'Detail 避免油膩或辛辣的食物(CHT)',
		'type' => 'wysiwyg'
		),
		'detail2_chs'=> array(
		'title' => 'Detail 避免油膩或辛辣的食物 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**減少刺激成份飲品 **/
		'label3_eng'=> array(
		'title' => 'Label 減少刺激成份飲品(ENG)',
		),
		'label3_cht'=> array(
		'title' => 'Label 減少刺激成份飲品 (CHT)',
		),
		'label3_chs'=> array(
		'title' => 'Label 減少刺激成份飲品 (CHS)',
		),
		
		'detail3_eng'=> array(
		'title' => 'Detail 減少刺激成份飲品 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail3_cht'=> array(
		'title' => 'Detail 減少刺激成份飲品(CHT)',
		'type' => 'wysiwyg'
		),
		'detail3_chs'=> array(
		'title' => 'Detail 減少刺激成份飲品 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**戒煙 **/
		'label4_eng'=> array(
		'title' => 'Label 戒煙(ENG)',
		),
		'label4_cht'=> array(
		'title' => 'Label 戒煙 (CHT)',
		),
		'label4_chs'=> array(
		'title' => 'Label 戒煙 (CHS)',
		),
		
		'detail4_eng'=> array(
		'title' => 'Detail 戒煙 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail4_cht'=> array(
		'title' => 'Detail 戒煙(CHT)',
		'type' => 'wysiwyg'
		),
		'detail4_chs'=> array(
		'title' => 'Detail 戒煙 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**做運動減肥 **/
		'label5_eng'=> array(
		'title' => 'Label 做運動減肥(ENG)',
		),
		'label5_cht'=> array(
		'title' => 'Label 做運動減肥 (CHT)',
		),
		'label5_chs'=> array(
		'title' => 'Label 做運動減肥 (CHS)',
		),
		
		'detail5_eng'=> array(
		'title' => 'Detail 做運動減肥 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail5_cht'=> array(
		'title' => 'Detail 做運動減肥(CHT)',
		'type' => 'wysiwyg'
		),
		'detail5_chs'=> array(
		'title' => 'Detail 做運動減肥 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**不要過份進食 **/
		'label6_eng'=> array(
		'title' => 'Label 不要過份進食(ENG)',
		),
		'label6_cht'=> array(
		'title' => 'Label 不要過份進食 (CHT)',
		),
		'label6_chs'=> array(
		'title' => 'Label 不要過份進食 (CHS)',
		),
		
		'detail6_eng'=> array(
		'title' => 'Detail 不要過份進食 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail6_cht'=> array(
		'title' => 'Detail 不要過份進食(CHT)',
		'type' => 'wysiwyg'
		),
		'detail6_chs'=> array(
		'title' => 'Detail 不要過份進食 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**把枕頭升高睡 **/
		'label7_eng'=> array(
		'title' => 'Label 把枕頭升高睡(ENG)',
		),
		'label7_cht'=> array(
		'title' => 'Label 把枕頭升高睡 (CHT)',
		),
		'label7_chs'=> array(
		'title' => 'Label 把枕頭升高睡 (CHS)',
		),
		
		'detail7_eng'=> array(
		'title' => 'Detail 把枕頭升高睡 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail7_cht'=> array(
		'title' => 'Detail 把枕頭升高睡(CHT)',
		'type' => 'wysiwyg'
		),
		'detail7_chs'=> array(
		'title' => 'Detail 把枕頭升高睡 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**飲水沖淡胃酸的濃度 **/
		'label8_eng'=> array(
		'title' => 'Label 飲水沖淡胃酸的濃度(ENG)',
		),
		'label8_cht'=> array(
		'title' => 'Label 飲水沖淡胃酸的濃度 (CHT)',
		),
		'label8_chs'=> array(
		'title' => 'Label 飲水沖淡胃酸的濃度 (CHS)',
		),
		
		'detail8_eng'=> array(
		'title' => 'Detail 飲水沖淡胃酸的濃度 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail8_cht'=> array(
		'title' => 'Detail 飲水沖淡胃酸的濃度(CHT)',
		'type' => 'wysiwyg'
		),
		'detail8_chs'=> array(
		'title' => 'Detail 飲水沖淡胃酸的濃度 (CHS)',
		'type' => 'wysiwyg'
		),
		
		/**不要穿緊身衣及腰帶 **/
		'label9_eng'=> array(
		'title' => 'Label 不要穿緊身衣及腰帶(ENG)',
		),
		'label9_cht'=> array(
		'title' => 'Label 不要穿緊身衣及腰帶 (CHT)',
		),
		'label9_chs'=> array(
		'title' => 'Label 不要穿緊身衣及腰帶 (CHS)',
		),
		
		'detail9_eng'=> array(
		'title' => 'Detail 不要穿緊身衣及腰帶 (ENG)',
		'type' => 'wysiwyg'
		),
		'detail9_cht'=> array(
		'title' => 'Detail 不要穿緊身衣及腰帶(CHT)',
		'type' => 'wysiwyg'
		),
		'detail9_chs'=> array(
		'title' => 'Detail 不要穿緊身衣及腰帶 (CHS)',
		'type' => 'wysiwyg'
		),
		
	
		
		

	),

);