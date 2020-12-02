<?php

/**
 * Page model config
 */

return array(

	'title' => 'FAQ >>> Question and answer',

	'single' => 'Question Answer',

	'model' => 'Questionanswer',
	
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
    'question_en' => 'required',
	'question_ch' => 'required',
	'answer_en' => 'required',
	'answer_ch' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
    'question_en.required' => 'The Answer(EN) is required',
    'question_ch.required' => 'The Answer(CN) is required',
	'answer_en.required' => 'The Question(EN) is required',
    'answer_ch.required' => 'The Question(CN) is required',
	),
	
	
	/**
	 * The display columns
	 */
	'columns' => array(
		
		'questiontype' => array(
    	'title' => "Question Type",
    	'relationship' => 'questiontype', 
     	'select' => "(:table).name_en",
		),
	
		'question_en'=> array(
        'title' => 'Question(EN)'
    	),
		'answer_en'=> array(
        'title' => 'Answer(EN)'
    	),
	
	
    
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
	 * The filter set
	 */
	'filters' => array(
		'questiontype'=> array(
        'title' => 'Question type',
        'type' => 'relationship',
        'name_field' => 'name_en',
    	),
    	 'publish'=> array(
        'title' => 'Publish',
        'type'=> 'bool',
    	),
 		'question_en'=> array(
        'title' => 'Question(EN)'
    	),
    	'answer_en'=> array(
        'title' => 'Answer(EN)'
    	),
		'question_ch'=> array(
        'title' => 'Question(CN)'
    	),
		'answer_ch'=> array(
        'title' => 'Answer(CN)'
    	),
   
  
  
  
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
	  	'publish'=> array(
        'title' => 'Publish',
        'type'=> 'bool',
    	),
		'questiontype'=> array(
        'title' => 'Question type',
        'type' => 'relationship',
        'name_field' => 'name_en',
    	),
    	'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,

    	),
 		'question_en'=> array(
        'title' => 'Question(EN)'
    	),
    	'answer_en'=> array(
    	'type' => 'wysiwyg',
        'title' => 'Answer(EN)'
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,

    	),
		'question_ch'=> array(
        'title' => 'Question(CN)'
    	),
		'answer_ch'=> array(
		'type' => 'wysiwyg',
        'title' => 'Answer(CN)'
    	),
    	
  
    
	),




);