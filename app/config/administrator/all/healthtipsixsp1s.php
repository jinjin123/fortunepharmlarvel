<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Burning Heart Intro(ALL)',

	'single' => 'healthtipsixp1',

	'model' => 'Healthtipsixp1',
	
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
	
	/*Rules
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
	*/
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
	
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_eng'=> array(
		'title' => 'Introduction  (ENG)',
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
		
		
	
		
	
		
		

	),

);