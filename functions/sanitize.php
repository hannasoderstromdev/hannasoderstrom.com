<?php
/* 
	sanitize.php
	@function

	Cleans (escapes) potentially harmful content from a string.
	Used at input and output into/from database for maximum security.
	ENT_QUOTES removes single and double quotes, 'UTF-8' limits 
	input to UTF-8 character table.

	Original author: Alex Garret - PHPAcademy.org
	Edited by: 	Hanna Söderström 
				haso1203@student.miun.se 
				Webbutveckling 120p 
				Årskurs 2
*/

function escape($string){
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}