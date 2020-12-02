<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Pain & Fever Series(CHS)',

	'single' => 'healthtipthree',

	'model' => 'Healthtipthree',
	
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

	'detail1_chs' => 'required',
	'detail2_chs' => 'required',
	'detail2_chs' => 'required',
	'detail4_chs' => 'required',
	'detail5_chs' => 'required',

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
		'title' => 'Introduction  (CHS)',
		),
		'detail1_chs'=> array(
		'title' => 'Detail 壓力性頭痛 (CHS)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_chs'=> array(
		'title' => 'Introduction  (CHS)',
		),
		'detail1_chs'=> array(
		'title' => 'Detail 壓力性頭痛 (CHS)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro **/
	
		'intro1_chs'=> array(
		'title' => 'Introduction  (CHS)',
		'type'=>'textarea',
		),
		
	
		/** Part-2 Detail **/
		'detail1_chs'=> array(
		'title' => 'Detail 壓力性頭痛 (CHS)',
		'type' => 'wysiwyg'
		),

	
		'detail2_chs'=> array(
		'title' => 'Detail 偏頭痛 (CHS)',
		'type' => 'wysiwyg'
		),
		
	
		'detail3_chs'=> array(
		'title' => 'Detail 頭痛鼻竇處 (CHS)',
		'type' => 'wysiwyg'
		),
	
		'detail4_chs'=> array(
		'title' => 'Detail 血管性頭 (CHS)',
		'type' => 'wysiwyg'
		),
		

		'detail5_chs'=> array(
		'title' => 'Detail 叢集性頭 (CHS)',
		'type' => 'wysiwyg'
		),
		

	),

);