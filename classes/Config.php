<?php
/* 
	Config.php
	@Class
	
	Steps through the GLOBAL $_CONFIG array to simplify access 
	to settings for the application: 
	Config::get('mysql/host'); equals $_CONFIG['mysql']['host'];

	Original author: Alex Garret - PHPAcademy.org
	Edited by: Hanna Söderström	haso1203@student.miun.se Webbutveckling 120p Årskurs 2
*/

class Config {

	public static function get($path = null) {

		if($path) {

			$config = $GLOBALS['config'];
			$path = explode('/', $path);

			// Step through config
			foreach ($path as $bit) {
				
				// check if bit exists in config
				if(isset($config[$bit])) {

					// Sets the existing bit as new root and continues loop at next level
					$config = $config[$bit];
				}/*
				else {
					die('<p class="system error">Error: No such item! (Config)</p>');
				}
				*/
			}

			return $config;
		}

		return false;
	}
}