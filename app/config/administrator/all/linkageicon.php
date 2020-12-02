<?php
include	'global.php';
/**
 * Page model config
 */

return array(

	'title' => "Home >>> Linkage Icon(ALL)",

	'single' => "linkageicon",

	'model' => 'Linkageicon',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button **/
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
		'link_eng' => 'required',
		'link_cht' => 'required',
		'link_chs' => 'required',
	),
	
	'columns' => array(
		'link_eng'=> array(
        	'title' => 'Link(ENG)'
    	),
    	'link_cht'=> array(
        	'title' => 'Link(CHT)'
    	),
		'link_chs'=> array(
        	'title' => 'Link(CHS)'
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
		'link_eng'=> array(
			'title' => 'Link(ENG)'
		),
		'link_cht'=> array(
			'title' => 'Link(CHT)'
    	),
		'link_chs'=> array(
			'title' => 'Link(CHS)'
    	),
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'link_eng'=> array(
			'title' => 'Link(ENG)'
    	),
    	'link_cht'=> array(
			'title' => 'Link(CHT)'
    	),
		'link_chs'=> array(
			'title' => 'Link(CHS)'
		),
		'img' => array(
			'title' => 'Icon Image',
			'type' => 'image',
			'location' => storage_path() . '/uploads/thumbs/',
			'description' => 'Suggested image size: 70(W) x 27(H)',
			'naming' => 'random',
			'mimes' => 'jpg,jpeg,png,bmp,gif',
			'sizes' => array(
				array(470, 470, 'fit', storage_path() . '/uploads/thumbs/medium/',100)
			)
		),
	),
);