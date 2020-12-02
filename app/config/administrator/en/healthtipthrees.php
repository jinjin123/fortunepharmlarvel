<?php

/**
 * Images model config
 */

return array(

	'title' => 'Health Tips >>> Pain & Fever Series(ENG)',

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
	
    'intro1_eng' => 'required',

	'detail1_eng' => 'required',
	'detail2_eng' => 'required',
	'detail2_eng' => 'required',
	'detail4_eng' => 'required',
	'detail5_eng' => 'required',

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
		'intro1_eng'=> array(
		'title' => 'Introduction  (ENG)',
		),
		'detail1_eng'=> array(
		'title' => 'Detail 壓力性頭痛 (ENG)',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'intro1_eng'=> array(
		'title' => 'Introduction  (ENG)',
		),
		'detail1_eng'=> array(
		'title' => 'Detail 壓力性頭痛 (ENG)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
		/** Part-1 Intro **/
	
		'intro1_eng'=> array(
		'title' => 'Introduction  (ENG)',
		'type'=>'textarea',
		),
		
	
		/** Part-2 Detail **/
		'detail1_eng'=> array(
		'title' => 'Detail 壓力性頭痛 (ENG)',
		'type' => 'wysiwyg'
		),

	
		'detail2_eng'=> array(
		'title' => 'Detail 偏頭痛 (ENG)',
		'type' => 'wysiwyg'
		),
		
	
		'detail3_eng'=> array(
		'title' => 'Detail 頭痛鼻竇處 (ENG)',
		'type' => 'wysiwyg'
		),
	
		
	
		'detail4_eng'=> array(
		'title' => 'Detail 血管性頭 (ENG)',
		'type' => 'wysiwyg'
		),
		

		'detail5_eng'=> array(
		'title' => 'Detail 叢集性頭 (ENG)',
		'type' => 'wysiwyg'
		),
		

	),

);