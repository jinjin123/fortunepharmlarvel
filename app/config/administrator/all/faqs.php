<?php

/**
 * Images model config
 */

return array(

	'title' => 'FAQ >>> FAQ(ALL)',

	'single' => 'faq',

	'model' => 'Faq',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button
	'action_permissions'=> array(
	'delete' => function($model)
	{
	return false;
	},
	),
	**/
	/*Rules*/
	'rules' => array(
    'question_eng' => 'required',
  'answer_eng' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
	'question_eng.required' => 'The Question(ENG) is required',
	'answer_eng.required' => 'The Answer(ENG) is required',
	),

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

		
		'question_eng'=> array(
		'title' => 'Question(ENG)',
		),
	
		
		'answer_eng'=> array(
		'title' => 'Answer(ENG)',
		),
	
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
		'question_eng'=> array(
		'title' => 'Question(ENG)',
		),

		'answer_eng'=> array(
		'title' => 'Answer(ENG)',
		),
	
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
	
		'faqserie'=> array(
        'title' => 'FAQ Series',
        'type' => 'relationship',
        'name_field' => 'name_eng',
    	),
	
		'question_eng'=> array(
		'title' => 'Question(ENG)',
		),
		'question_cht' => array(
		'title' => 'Question(CHT)',
		),
		'question_chs' => array(
		'title' => 'Question(CHS)',
		),

		'answer_eng'=> array(
		'title' => 'Answer(ENG)',
		'type'=>'textarea'
		),
		'answer_cht' => array(
		'title' => 'Answer(CHT)',
		'type'=>'textarea'
		),
		'answer_chs' => array(
		'title' => 'Answer(CHS)',
		'type'=>'textarea'
		),
		
		'img' => array(
  		'title' => 'Slider Image',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 1096(W) x 684(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(1096, 684, 'fit', storage_path() . '/uploads/thumbs/full/',100),
        array(545, 341, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
		
	),

);