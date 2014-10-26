<?php 
/*
	Input.php
	@Class

	Handler for input of user data

	Original author: Alex Garret - PHPAcademy.org
	URL: http://www.youtube.com/watch?v=3yrpRfdtYc4

	Edited by: Hanna Söderström	haso1203@student.miun.se Webbutveckling 120p Årskurs 2

	Last update: 2013-12-02
*/
class Input {
	
	public static function exists($type = 'POST') {
		
		switch ($type) {
			case 'POST':
					return (!empty($_POST)) ? true : false;
				break;
			
			case 'GET':
					return (!empty($_GET)) ? true : false;
				break;

			default:
				return false;
				break;
			
		}
	}

	public static function get($item) {

		if(isset($_POST[$item])) 
		{
			return $_POST[$item];
		} 
		else if(isset($_GET[$item]))
		{
			return $_GET[$item];
		}
		return '';
	}
}

?>