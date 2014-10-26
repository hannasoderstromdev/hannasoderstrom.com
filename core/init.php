<?php
/* 
	init.php
	Initializes the application

	Constructs a GLOBAL array of variables to make 
	common data easily available.

	Original author: Alex Garret - PHPAcademy.org
	Edited by: Hanna Söderström haso1203@student.miun.se Webbutveckling 120p Årskurs 2

	Last edited: 2013-12-02
*/

// Setup global 'config' array data
$GLOBALS['config'] = array(
	'remember' 	=> array(
		'cookie_name'	=>	'hash',
		'cookie_expiry'	=>	604800
	),
	'session' 	=> array(
		'session_name'	=>	'user',
		'token_name'	=>	'token'
	),
	'sitedata'	=> array(
		'site_title'	=>	'HannaSoderstrom.com',
		'email'			=>	'no-reply@hannasoderstrom.com'
	)
);

/* 
	Class auto-loader to simplify including of Classes by name.
	Uses anonymous function, require PHP version minimum 5.3.0.
*/
spl_autoload_register(function($class){
	require_once 'classes/' . $class . '.php';
});

// Load sanitizer function
require_once 'functions/sanitize.php';
require_once 'functions/populate_sider.php';
require_once 'functions/getBooksList.php';