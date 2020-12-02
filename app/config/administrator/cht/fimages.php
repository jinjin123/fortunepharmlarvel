<?php

/**
 * Page model config
 */

return array(

	'title' => 'Fixed image',

	'single' => 'fixedimage',

	'model' => 'FixedImage',
	
	'form_width' => 1000,
	
	/** Disable the Create and Delete button**/
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
	
	
	/**
	 * The display columns
	 */
	'columns' => array(
	 	'remark'=> array(
        'title' => 'Image Description'
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
	
	'remark'=> array(
        'title' => 'Image Description'
    	),
  
  
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
	
	'remark'=> array(
    'title' => 'Image Description'
    ),
  
  
   
    
	),




);