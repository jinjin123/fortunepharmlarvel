<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => "Company Intro >>> Introduction(ALL)",

	'single' => "historyintro",

	'model' => 'Historyintro',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button	**/
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
    'content_eng' => 'required',
	'youtube' => 'required',
	'youkou' => 'required',
	
	'intro_text_eng' => 'required',
	'intro_text_cht' => 'required',
	'intro_text_chs' => 'required',
	'intro_img' => 'required',
	),
	
	/*Messages*/
	'messages' => array(
    'content_eng.required' => 'The Content(ENG) is required',
   	'youtube.required' => 'The Youtube link is required',
	'youkou.required' => 'The Youkou link is required',
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
	
		'content_eng'=> array(
        'title' => 'Content(ENG)'
        
    	),
    		'content_cht'=> array(
        'title' => 'Content(CHT)'
    	),
    		'content_chs'=> array(
        'title' => 'Content(CHS)'
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
	'content_eng'=> array(
        'title' => 'Content(ENG)'
    	),
    		'content_cht'=> array(
        'title' => 'Content(CHT)'
    	),
    		'content_chs'=> array(
        'title' => 'Content(CHS)'
    	),
		
    
    	
	),

	/**
	 * The editable fields
	 */
		'edit_fields' => array(
		
		'youtube'=> array(
        'title' => 'Youtube link',
    	),
    	
    	'youkou'=> array(
        'title' => 'Youku Link',
    	),

		'youtube_tvc_link'=> array(
        'title' => 'Youtube TVC Link',
    	),

		'youkou_tvc_link'=> array(
        'title' => 'Youku TVC Link',
    	),
		
		'content_eng'=> array(
        'title' => 'Content(ENG)',
        'type' => 'wysiwyg'
    	),
    	'content_cht'=> array(
        'title' => 'Content(CHT)',
        'type' => 'wysiwyg'
    	),
		'content_chs'=> array(
        'title' => 'Content(CHS)',
        'type' => 'wysiwyg'
    	),

		'intro_text_eng'=> array(
        'title' => 'Intro Text(ENG)',
        'type' => 'wysiwyg'
    	),
    	'intro_text_cht'=> array(
        'title' => 'Intro Text(CHT)',
        'type' => 'wysiwyg'
    	),
		'intro_text_chs'=> array(
        'title' => 'Intro Text(CHS)',
        'type' => 'wysiwyg'
    	),

		'intro_img' => array(
			'title' => 'Intro Image',
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