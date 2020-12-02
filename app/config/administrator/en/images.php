
<?php
include	'global.php';
/**
 * Images model config
 */

return array(

	'title' => 'Images Library',

	'single' => 'image',

	'model' => 'Image',
	
	'form_width' => 400,
	
	/** Disable the Create and Delete button**/
	'action_permissions'=> array(
	'delete' => function($model)
	{
	return false;
	},

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
	
		'page' => array(
    	'title' => "Belongs to",
    	'relationship' => 'page', 
     	'select' => "(:table).name",
		),
	
		
	'url' => array(
    'title' => 'Preview',
	'output' => function($value)
    {
    	if($value){
    	list($width, $height)=getimagesize($GLOBALS['home_directory'].'app/storage/uploads/'.$value);
        return '<font size="5">'.$value.'</font> <p><img src="'.$GLOBALS['home_directory'].'app/storage/uploads/'.$value.'" height="100" /><p><font>Dimension: '.$width.'(w) x '.$height.'(h)</font>';
		}else{
		return '<p>No Image</p>';	
		}	
		
		},
		
	
   
	),
	),




	/**
	 * The filter set
	 */
	'filters' => array(
	
		'page'=> array(
        'title' => 'Belongs to',
        'type' => 'relationship',
        'name_field' => 'name',
    	 ),
		
		'url' => array(
		'title' => 'Image name',
		),

	),

	/**
	 * The editable fields 
	 * 'url' => array(
		'title' => 'Uploaded image path',
		'type' => 'image',
		'location' => public_path() . '/uploads/',
		'naming' => 'keep',
		),
	 * 
	 *  	//'type' => 'file',
	 */
	 
	'edit_fields' => array(

	'url' => array(
  	'title' => 'image',
    'type' => 'image',
    'location' => storage_path() . '/uploads/',
    'naming' => 'keep',
    'mimes' => 'jpg,jpeg,png,bmp',
	),
	
	'page'=>array(
	'title' => 'Belongs to which page',
    'type' => 'relationship',
    'name_field' => 'name',
	
	),
	
	
	

	),

);