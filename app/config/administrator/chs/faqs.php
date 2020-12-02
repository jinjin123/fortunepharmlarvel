<?php

/**
 * Images model config
 */

return array(

	'title' => 'FAQ >>> FAQ(CHS)',

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
    'question_chs' => 'required',
  'answer_chs' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
	'question_chs.required' => 'The Question(CHS) is required',
	'answer_chs.required' => 'The Answer(CHS) is required',
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

		

		'question_chs' => array(
		'title' => 'Question(CHS)',
		),
		
			'answer_chs' => array(
		'title' => 'Answer(CHS)',
		),
	
	),




	/**
	 * The filter set
	 */
	'filters' => array(
	
		'question_chs' => array(
		'title' => 'Question(CHS)',
		),

		'answer_chs' => array(
		'title' => 'Answer(CHS)',
		),
	),

	/**
	 * The editable fields 
	 */
	'edit_fields' => array(
	
		'faqserie'=> array(
        'title' => 'FAQ Series',
        'type' => 'relationship',
        'name_field' => 'name_chs',
    	),
		
		'question_chs' => array(
		'title' => 'Question(CHS)',
		),
		
		'answer_chs' => array(
		'title' => 'Answer(CHS)',
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