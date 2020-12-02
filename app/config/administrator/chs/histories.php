<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => "Company Intro >>> History(CHS)",

	'single' => "history",

	'model' => 'History',
	
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

	),
	
	/*Messages*/
	'messages' => array(
    'title_chs.required' => 'The Title(CHS) is required',

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
	
			'title_chs'=> array(
        'title' => 'Title(CHS)'        
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
		
    
    	
	),

	/**
	 * The editable fields
	 */
	 
	 
		'edit_fields' => array(
		
			'date'=> array(
        	'type' => 'date',
   			'title' => 'Date',
    		'date_format' => 'yy', //optional, will default to this value
    		),
    	
		'youkou'=> array(
        'title' => 'Youku Link'
    	),
		
    		'title_chs'=> array(
        'title' => 'Title(CHS)'
    	),
    	
		'img1' => array(
  		'title' => 'Image 1',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
		'img2' => array(
  		'title' => 'Image 2',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
		'img3' => array(
  		'title' => 'Image 3',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
		'img4' => array(
  		'title' => 'Image 4',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
		'img5' => array(
  		'title' => 'Image 5',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img6' => array(
  		'title' => 'Image 6',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img7' => array(
  		'title' => 'Image 7',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img8' => array(
  		'title' => 'Image 8',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img9' => array(
  		'title' => 'Image 9',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img10' => array(
  		'title' => 'Image 10',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img11' => array(
  		'title' => 'Image 11',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img12' => array(
  		'title' => 'Image 12',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img13' => array(
  		'title' => 'Image 13',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img14' => array(
  		'title' => 'Image 14',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img15' => array(
  		'title' => 'Image 15',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img16' => array(
  		'title' => 'Image 16',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img17' => array(
  		'title' => 'Image 17',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img18' => array(
  		'title' => 'Image 18',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img19' => array(
  		'title' => 'Image 19',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
			'img20' => array(
  		'title' => 'Image 20',
   		'type' => 'image',
   		'location' => storage_path() . '/uploads/thumbs/',
    	'description' => 'Suggested image size: 470(W) x 470(H)',
   		'naming' => 'random',
    	'mimes' => 'jpg,jpeg,png,bmp,gif',
		'sizes' => array(
        array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
    	)
		),
		
	

   
	),
	
);