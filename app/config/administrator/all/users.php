<?php

/**
 * Actors model config
 */

return array(

	'title' => 'Admin users',

	'single' => 'user',

	'model' => 'User',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id',
		'username' => array(
			'title' => 'User name',
		),
		'email' => array(
			'title' => 'Email',
		),
		'first_name' => array(
			'title' => 'First Name',
		),
		'last_name' => array(
			'title' => 'Last Name',
		),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'id',
		'username' => array(
			'title' => 'User name',
		),
		'email' => array(
			'title' => 'Email',
		),
		'first_name' => array(
			'title' => 'First Name',
		),
		'last_name' => array(
			'title' => 'Last Name',
		),
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'username' => array(
			'title' => 'User name',
			'type' => 'text',
		),
		'email' => array(
			'title' => 'Email',
			'type' => 'text',
		),
		'password' => array(
			'title' => 'Password',
			'type' => 'password',
		),
		'first_name' => array(
			'title' => 'First Name',
			'type' => 'text',
		),
		'last_name' => array(
			'title' => 'Last Name',
			'type' => 'text',
		),
	),

);