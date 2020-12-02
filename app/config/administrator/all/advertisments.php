<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => 'About Us >>> Advertisments(ALL)',

	'single' => 'advertisment',

	'model' => 'Advertisment',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button
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
	**/
	/*Rules*/
	'rules' => array(
    'title_eng' => 'required',
     'title_cht' => 'required',
      'title_chs' => 'required',
	 'date' => 'required',
	'desc_eng' => 'required',
	'desc_cht' => 'required',
	'desc_chs' => 'required',
	'img1' => 'required',
	'youtube' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
    'title_eng.required' => 'The Title(ENG) is required',
    'date.required' => 'The Date is required',
    'desc_eng.required' => 'The Description is required',
    'youtube.required' => 'The YouTube Link is required',
	),
	
	
	/**
	 * The display columns
	 * 	'image' => array(
    	'title' => "Image",
    	'relationship' => 'image', 
     	'select' => "(:table).url",
		),
	 */
	'columns' => array(
	
		'title_eng'=> array(
        'title' => 'Title(ENG)'
    	),
    	'desc_eng'=> array(
        'title' => 'Description(ENG)'
    	),
    	'date'=> array(
        'title' => 'Date'
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
		'title_eng'=> array(
        'title' => 'Title(ENG)'
    	),
    	'desc_eng'=> array(
        'title' => 'Description(ENG)'
    	),
    	'date'=> array(
        'title' => 'Date'
    	),
    	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		
		'date'=> array(
        'type' => 'date',
   		'title' => 'Date',
    	),
    	
		'youtube'=> array(
   		'title' => 'Youtube Link',
    	),
    	
		'youkou'=> array(
   		'title' => 'Youku Link',
    	),
		
		
 		'img1' => array(
  		'title' => 'Preview Image',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 407(W) x 140(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(407, 140, 'fit', storage_path() . '/uploads/thumbs/full/',100)
    	)
		),
    	
		'title_eng'=> array(
        'title' => 'Title(ENG)'
    	),
    	'title_cht'=> array(
        'title' => 'Title(CHT)'
    	),
    	'title_chs'=> array(
        'title' => 'Title(CHS)'
    	),
		
    	'desc_eng'=> array(
        'title' => 'Description(ENG)',
        'type'=>'textarea'
    	),
    	
    	'desc_cht'=> array(
        'title' => 'Description(CHT)',
        'type'=>'textarea'
    	),
    	'desc_chs'=> array(
        'title' => 'Description(CHS)',
        'type'=>'textarea'
    	),
    
	),
	
);