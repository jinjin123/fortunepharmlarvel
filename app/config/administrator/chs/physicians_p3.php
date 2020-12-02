<?php

/**
 * Categories model config
 */

return array(

	'title' => 'Find A Physicians >>> Clinics',
	
	'single' => 'clinic',

	'model' => 'Clinic',

	'form_width' => 1000,
	
	/** Disable Function
	'action_permissions'=> array(
	'delete' => function($model)
	{
	return false;
	},
	),
	**/
	
	/*Rules*/
	'rules' => array(
    'name_en' => 'required',
	'name_ch' => 'required',
	'address_en' => 'required',
	'address_ch' => 'required',
	'level' => 'required',
	'phone' => 'required'
	),
	
	/*Messages*/
	'messages' => array(
	'name_en.required' => 'The Clinic Name(EN) is required',
	'name_ch.required' => 'The Clinic Name(CN) is required',
	'address_en.required' => 'The Address Name(EN) is required',
	'address_ch.required' => 'The Address Name(CN) is required',
	'level.required' => 'The Level is required',
	'phone.required' => 'The Phone Number is required'

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
	 * 	
	 */

	
		'columns' => array(
		'name_en'=> array(
		'title' => 'Clinic Name(EN)',
		),
		'address_en'=> array(
		'title' => 'Address(EN)',
		),
		'district' => array(
    	'title' => "District",
    	'relationship' => 'district', 
     	'select' => "(:table).name_en",
		),
		'level'=> array(
        'title' => 'Level',
        'type' => 'enum',
        'options' => array('Diamond', 'Gold', 'Silver', 'Bronze', 'No'),
    	),
    
	
	
			'phone'=> array(
        'title' => 'Phone Number',
    	),
	
    
	),

	/**
	 * The filter set
	 */
	'filters' => array(
	
    	'phone'=> array(
        'title' => 'Phone Number',
    	),
    	'website'=> array(
        'title' => 'Website link',
    	),
    	 	'googleMapLink'=> array(
        'title' => 'Google Map Link',
    	),
    		'district'=> array(
        'title' => 'District',
        'type' => 'relationship',
        'name_field' => 'name_en',
    	),
    	'certified'=> array(
        'title' => 'Certified',
        'type'=> 'bool',
    	),
    	
    	'level'=> array(
        'title' => 'Level',
        'type' => 'enum',
        'options' => array('Diamond', 'Gold', 'Silver', 'Bronze', 'No'),
    	),
   			'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'name_en'=> array(
		'title' => 'Clinic Name(EN)',
		),
		'address_en'=> array(
		'title' => 'Address(EN)',
		),
			'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 	'editable' => false,
    	),
		'name_ch' => array(
		'title' => 'Clinic Name(CN)',
		),
		'address_ch' => array(
		'title' => 'Address(CN)',
		),

	

	),

	/**
	 * The editable fields 
	 */
		'edit_fields' => array(
	
    	'district'=> array(
        'title' => 'District',
        'type' => 'relationship',
        'name_field' => 'name_en',
    	),
    		'certified'=> array(
        'title' => 'Certified',
        'type'=> 'bool',
    	),
    		'level'=> array(
        'title' => 'Level',
        'type' => 'enum',
        'options' => array('Diamond', 'Gold', 'Silver', 'Bronze', 'No'),
    	),
    	'phone'=> array(
        'title' => 'Phone Number',
    	),
    	'website'=> array(
        'title' => 'Website link',
    	),
    	'googleMapLink'=> array(
        'title' => 'Google Map Link',
    	),
    	'label1'=> array(
    	'type' => 'markdown',
  		'title'=>'Language EN',
  		'height' => 0,
  	
    	),
		'name_en'=> array(
		'title' => 'Clinic Name(EN)',
		),
			'address_en'=> array(
		'title' => 'Address(EN)',
		),
		'label2'=> array(
    	'type' => 'markdown',
  		'title'=>'Language CN',
  		'height' => 0,
  	 
    	),
		'name_ch' => array(
		'title' => 'Clinic Name(CN)',
		),
	
		'address_ch' => array(
		'title' => 'Address(CN)',
		),

  

	),

);