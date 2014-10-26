<?php 
/* 
	Validate.php
	@Class

	Validate Class

	A helper class that compares input to a set of validation 
	rules and returns true or errors.

	check($source, $items)	- Checks content in $source using the validation $items
	addError($error)		- Add error to list
	errors()				- Returns list of errors
	passed()				- Fast check to see if there were no errors

	Original author: Alex Garret - PHPAcademy.org
	Edited by: 	Hanna Söderström 
				haso1203@student.miun.se 
				Webbutveckling 120p 
				Årskurs 2	

	Last edit: 2013-12-04
*/

class Validate {

	private $_passed 	= false,
			$_errors 	= array();

	public function check( $source, $items = array() ) 
	{
		
		// Loop through first level
		foreach ($items as $item => $rules) {
			
			$name = $rules['name'];

			// Loop through second level
			foreach($rules as $rule => $rule_value) {

				$value = trim($source[$item]);
				$item = escape($item);

				/* 
					If there is content in hidden textbox,
					this is probably due to a spam bot, abort.
				*/
				if($rule == 'spamcheck' AND !empty($value)){
					die('Spamcheck failed');

					// Make sure all required fields are filled before checking anything more
				} else if ($rule === 'required' AND empty($value) AND $rule_value){
					$this->addError($name . ' is required!');
				} else if(!empty($value)){

					// Check the rest of the validation-requirements
					switch ($rule) {
						case 'min':
							if ( strlen($value) < $rule_value )
							{
								$this->addError($name . ' must be at least ' . $rule_value . ' characters long.');
							}
							break;
						
						case 'max':
							if ( strlen($value) > $rule_value )
							{
								$this->addError($name . ' can not contain more than ' . $rule_value . ' characters.');
							}
							break;
						
						case 'matches':
							if ( $value != $source[$rule_value] )
							{
								$this->addError($name . ' must match ' . $rule_value . '.');
							}
							break;
						
						case 'unique':
							$check = $this->_db->get('id', $rule_value, array($item, '=', $value));
							if ($check->count())
							{
								$this->addError($name . ' already exists.');
							}
							break;

						case 'alphanum':
							if (!ctype_alnum($value))
							{
								$this->addError($name . ' must be alphanumerical (a-z, 0-9).');
							}
							break;
						
					}
				}

			}
		}
		
		// Check if there are no errors
		if ( empty($this->_errors) )
		{
			$this->_passed = true;
		}
	}

	private function addError($error) {
		$this->_errors[] = $error;
	}

	public function errors() {
		return $this->_errors;
	}

	public function passed() {
		return $this->_passed;
	}

}
