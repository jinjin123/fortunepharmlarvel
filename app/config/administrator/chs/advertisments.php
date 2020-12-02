<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => 'About Us >>> Advertisments(CHS)',

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
    'title_chs' => 'required',
	 'date' => 'required',
	'desc_chs' => 'required',
	'img1' => 'required',
	'youtube' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
    'title_chs.required' => 'The Title(CHS) is required',
    'date.required' => 'The Date is required',
    'desc_chs.required' => 'The Description(CHS) is required',
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
	
		'title_chs'=> array(
        'title' => 'Title(CHS)'
    	),
    	'desc_chs'=> array(
        'title' => 'Description(CHS)'
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
		'title_chs'=> array(
        'title' => 'Title(CHS)'
    	),
    	'desc_chs'=> array(
        'title' => 'Description(CHS)'
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
    	

    	'title_chs'=> array(
        'title' => 'Title(CHS)'
    	),
		
  
    	'desc_chs'=> array(
        'title' => 'Description(CHS)',
        'type'=>'textarea'
    	),
    
	),
	
);