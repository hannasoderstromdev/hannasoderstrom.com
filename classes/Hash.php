<?php 
/*
	Hash.php
	@Class
	
	Creates hashes 

	make($string, $salt)	- Returns a SHA256 hash from string + salt
	salt($length)			- Creates salt of random hash of set length
	unique()				- Returns a unique id

	Original author: Alex Garret - PHPAcademy.org
	
	Edited by: 	Hanna Söderström 
				haso1203@student.miun.se 
				Webbutveckling 120p 
				Årskurs 2

	Last edited: 2013-12-04
*/

class Hash {
	
	public static function make($string, $salt = '') {
		return hash('sha256', $string . $salt);
	}

	public static function salt($length) {
		return mcrypt_create_iv($length);
	}

	public static function unique() {
		return self::make(uniqid());
	}
}