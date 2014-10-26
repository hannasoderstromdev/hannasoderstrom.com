<?php 
/* 
	Token.php
	@Class
	
	Protects against Cross-Site Request Forgery.
	
	generate() 		- Generates a unique Token. 
	check($token) 	- Compares given Token to that stored in user session.

	Original author: Alex Garret - PHPAcademy.org
	URL: http://www.youtube.com/watch?v=3yrpRfdtYc4

	Edited by:  Hanna Söderström	
				haso1203@student.miun.se 
				Webbutveckling 120p 
				Årskurs 2

	Last update: 2013-12-02
*/

class Token {
	public static function generate() {
		return Session::put(Config::get('session/token_name'), md5(uniqid()));
	}

	public static function check($token) {
		$tokenName = Config::get('session/token_name');

		if(Session::exists($tokenName) AND $token === Session::get($tokenName)) {
			Session::delete($tokenName);
			return true;
		}

		return false;
	}
}