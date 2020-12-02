<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => "Success Stories >>> What's New",

	'single' => "what's new",

	'model' => 'Whatnew',
	
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
    'title_en' => 'required',
	'title_ch' => 'required',
	'author_en' => 'required',
	'author_ch' => 'required',
	'content_en' => 'required',
	'content_ch' => 'required',
	'type' => 'required',
	'link' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
    'title_en.required' => 'The title(EN) is required',
    'title_ch.required' => 'The title(CN) is required',
	'author_en.required' => 'The author(EN) is required',
    'author_ch.required' => 'The author(CN) is required',
    'content_en.required' => 'The content(EN) is required',
    'content_ch.required' => 'The content(CN) is required',
  	'type.required' => 'The type is required'
	),
	
	/**
	 * The display columns
	 *  	 	'image' => array(
    	'title' => "Image",
  		'type'=>'image',
     	'output' => function($value)
    	{
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/'.$value);
        return '<p>'.$value.'</p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/'.$value.'" height="100" /><p>Dimension: '.$width.'(w) x '.$height.'(h)</p>';
		}else{
		return '<p>No Image</p>';	
		}	
		
		},
		),	
	 */
	'columns' => array(
	

	
		'title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'author_en'=> array(
        'title' => 'Author(EN)'
    	),
    	'country' => array(
    	'title' => "Country",
    	'relationship' => 'country', 
     	'select' => "(:table).name_en",
		),
  			'type'=> array(
        'title' => 'Type',
        'type' => 'enum',
        'options' => array('video', 'print'),
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
		'publish'=> array(
        'title' => 'Publish',
        'type'=> 'bool',
    	),
		'country'=> array(
        'title' => 'Country',
        'type' => 'relationship',
        'name_field' => 'name_en',
    	),
    	'type'=> array(
        'title' => 'Type',
        'type' => 'enum',
        'options' => array('video', 'print'),
    	),
		'image'=> array(
        'title' => 'Image',
        'type' => 'relationship',
        'name_field' => 'url',
    	),
    		
		'title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'content_en'=> array(
        'title' => 'Content(EN)'
    	),
    	'author_en'=> array(
        'title' => 'Author(EN)'
    	),
    	'title_ch'=> array(
        'title' => 'Title(CN)'
    	),
    	'author_ch'=> array(
        'title' => 'Author(CN)'
    	),
    	'content_ch'=> array(
        'title' => 'Content(CN)'
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
		'country'=> array(
        'title' => 'Country',
        'type' => 'relationship',
        'name_field' => 'name_en',
    	),
    	'type'=> array(
        'title' => 'Type',
        'type' => 'enum',
        'options' => array('video', 'print'),
    	),
		'image'=> array(
        'title' => 'Image',
         'type' => 'image',
         'location' => storage_path() . '/uploads/',
   		 'naming' => 'keep',
    	'mimes' => 'jpg,jpeg,png,bmp',
        'description' => 'Suggested image size: 414(W) x 434(H)',
    	 ),
    	'link'=> array(
        'title' => 'Link'
    	),
    	'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 20,

    	),
    	'title_en'=> array(
        'title' => 'Title(EN)'
    	),
    	'author_en'=> array(
        'title' => 'Author(EN)'
    	),
    	'content_en'=> array(
    	'type' => 'textarea',
        'title' => 'Content(EN)'
    	),
    	'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',


    	),
    	'title_ch'=> array(
        'title' => 'Title(CN)'
    	),
    	'author_ch'=> array(
        'title' => 'Author(CN)'
    	),
    	'content_ch'=> array(
    	'type' => 'textarea',
        'title' => 'Content(CN)'
    	),
   
    	
    
	),
	
);