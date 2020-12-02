<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => "About us>>> News(CHT)",

	'single' => "newpost",

	'model' => 'Newpost',
	
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
    'title_cht' => 'required',
  	'desc_cht' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
    'title_cht.required' => 'The title(CHT) is required',
 	'desc_cht.required' => 'The Description(CHT) is required',
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
		
		
		'title_cht'=> array(
        'title' => 'Title(CHT)'
    	),
  
    	'desc_cht'=> array(
        'title' => 'Description(CHT)'
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
		'title_cht'=> array(
        'title' => 'Title(CHT)'
    	),
  
    	'desc_cht'=> array(
        'title' => 'Description(CHT)'
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
        'title' => 'Date',
        'type' => 'date'
    	),
		
	
    	'title_cht'=> array(
        'title' => 'Title(CHT)'
    	),
  
  
    	'desc_cht'=> array(
        'title' => 'Description(CHT)',
        'type' => 'wysiwyg',
    	),
 
    
		'img1' => array(
  		'title' => 'Image ',
    	'type' => 'image',
        'location' => storage_path() . '/uploads/thumbs/',
   		'description' => 'Suggested image size: 424(W) x 332(H)',
    	'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(424, 332, 'fit', storage_path() . '/uploads/thumbs/full/', 100),
   		)
		),

   
    	
    
	),
	
);