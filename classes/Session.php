<?php 
/*
	Session.php
	@Class

	Handler for User Session Data

	exists($name) 					- Check if session exists (is set)
	put($name, $value) 				- Puts Name and a Value into session data
	get($name)						- Gets Value from session data
	delete($name)					- Removes session
	notification($name, $string) 	- Notifies user of something

	Original author: Alex Garret - PHPAcademy.org
	URL: http://www.youtube.com/watch?v=3yrpRfdtYc4

	Edited by:  Hanna Söderström	
				haso1203@student.miun.se 
				Webbutveckling 120p 
				Årskurs 2

	Last update: 2013-12-02

*/

class Session {
	public static function exists($name) {
		return (isset($_SESSION[$name])) ? true : false;
	}

	public static function put($name, $value) {
		return $_SESSION[$name] = $value;
	}

	public static function get($name) {
		return $_SESSION[$name];
	}

	public static function delete($name) {
		if(self::exists($name)) 
		{
			unset($_SESSION[$name]);
		}
	}

	// Session name, message
	public static function notification($name, $string = '') {
		if(self::exists($name)) 
		{
			$session = self::get($name);
			self::delete($name);
			return $session;
		} else {
			self::put($name, $string);
		}
	}

}