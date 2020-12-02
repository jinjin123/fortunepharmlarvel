<?php

if(Lang::has('administrator.lang')){
if(Lang::get('administrator.lang')=='en'){
$model_config_path=	app('path').'/config/administrator/en';	
}else if (Lang::get('administrator.lang')=='cht'){
$model_config_path=	app('path').'/config/administrator/cht';		
}else if (Lang::get('administrator.lang')=='chs'){
$model_config_path=	app('path').'/config/administrator/chs';
}else{
$model_config_path=	app('path').'/config/administrator/all';
}	
}else{
$model_config_path=	app('path').'/config/administrator/all';
}

return array(

	/**
	 * Package URI
	 *
	 * @type string
	 */
	'uri' => 'admin',

	/**
	 * Page title
	 *
	 * @type string
	 */
	'title' => 'Fortune Pharm',
	

	/**
	 * The path to your model config directory
	 *
	 * @type string
	 */
	//'model_config_path' => app('path').'/config/administrator/'.trans('administrator.lang'),
	
	
	'model_config_path' => $model_config_path,


	/**
	 * The path to your settings config directory
	 *
	 * @type string
	 */
	'settings_config_path' => app('path') . '/config/administrator/all/settings/',

	/**
	 * The menu structure of the site. Each item should either be the name of the model's config file or an array of names of model config files.
	 * By doing the latter, you can group certain models together. Each name needs to have a config file in your model config path with the same
	 * name. So 'users' would require a 'users.php' file in your model config path.
	 *
	 * @type array
	 *
	 * 	array(
	 *		'Products' => array('products', 'product_images', 'orders'),
	 *		'users',
	 *	)
	 */
	
	'menu' => array( 
	'Pages'=> array(
		'Home' => array('homesliders','homebanners','linkageicon'),
		'Products' => array('markets','series','indications','products','productbanners'),
		'Healthcare Series' => array(/*'markets2',*/'healthcare'),
		'Symptom Checker' => array('producttakeindication','producttakes'),
		'FAQ' => array('faqseries','faqs'),
		'Health Tips' => array('Cold and Flu' =>array('healthtiponep1s','healthtiponep2s','healthtiponep3s'),'Children Cold and Flu' =>array('healthtiptwop1s','healthtiptwop2s','healthtiptwop3s'),'healthtipthrees','healthtipfours','Allergies and Sensitive' =>array('healthtipfivep1s','healthtipfivep2s','healthtipfivep3s','healthtipfivep4s'),'Heart Burning' =>array('healthtipsixsp1s','healthtipsixsp2s','healthtipsixsp3s'),'healthtipsevens'),
		'About Us' => array('Company Intro' =>array('historyintro','companyhistories', 'factoryintro','histories'),'News'=>array('newposts'),'Latest Offers'=>array('offers'),'Charity Fund' =>array('charityintro','charityfunds'),'Advertisments'=>array('introadvertisments','advertisments'),'Contact Us' =>array('hkcontacts','chinacontacts','jobs')),
		'Policies' => array('policies'),
		'Terms' => array('terms'),
		'Others Services' => array('otherservices'),
	 ),
	'Menus' => array('menus'),
//	'Other Services' => array('otherservices'),
	),
	
/*
	'menu' => array(
		'Pages'=> array(
		'Home' => array('banners','home_contents'),
		'About Us' => array('aboutus_contents'),
		'Procedure Info' => array('procedure_info_p1','procedure_info_p2','procedure_info_p3','procedure_info_p4','procedure_info_p5'),
		'FAQ' => array('questiontypes','questionanswers'),
		'Success Stories' => array('countries','whatnews','testimonials'),
		'Contact Us' => array('contact_p1','contact_p2'),
		'Find A Physician' => array('physicians_p1','physicians_p2','physicians_p3'),
		'Privacy Policy' => array('policys'),
		),
		'Menus' => array('menus'),

	),
 /*
 * /
	 
	/**
	 * The permission option is the highest-level authentication check that lets you define a closure that should return true if the current user
	 * is allowed to view the admin section. Any "falsey" response will send the user back to the 'login_path' defined below.
	 *
	 * @type closure
	 */
	'permission'=> function()
	{
		return true;
		//return Auth::user()->hasRole('admin');
	},

	/**
	 * This determines if you will have a dashboard (whose view you provide in the dashboard_view option) or a non-dashboard home
	 * page (whose menu item you provide in the home_page option)
	 *
	 * @type bool
	 */
	'use_dashboard' => false,

	/**
	 * If you want to create a dashboard view, provide the view string here.
	 *
	 * @type string
	 */
	'dashboard_view' => '',

	/**
	 * The menu item that should be used as the default landing page of the administrative section
	 *
	 * @type string
	 */
	'home_page' => 'menus',

	/**
	 * This is the path where Administrator will send the user if they are not logged in (!Auth::check())
	 *
	 * @type string
	 */
	'login_path' => '/admin',

	/**
	 * The logout path is the path where Administrator will send the user when they click the logout link
	 *
	 * @type string
	 */
	 
	//'logout_path' => '/home/en',

	
	//'logout_path' => '/admin',
	
	'logout_path' => '/logout',
		
	//'back_to_site_path' => '',
	
	'back_to_site_path' => URL::to('back'),

	
	/**
	 * Redirect key
	 *
	 * @type string
	 *
	 * This comes with the redirection to your login_action. Input::get('redirect') will hold the return URL.
	 */
	'login_redirect_key' => 'redirect',

	/**
	 * Global items per page
	 *
	 * @type NULL|int
	 *
	 * If you set this to an integer value greater than 0, it will override the $per_page static property in ALL of your models
	 */
	'global_rows_per_page' => 20,

	/**
	 * An array of available locale strings. This determines which locales are available in the languages menu at the top right of the Administrator
	 * interface.
	 *
	 * @type array
	 *
	 */
	
	 'locales' => array('all'),
	 //'locales' => array('all','en','cht','chs'),
	 
);




?>