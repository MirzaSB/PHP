<?php
	
	//First test vector
	$str = "++d+53+c+";
	//Execute the function using the first test vector
	echo "For the string, " . $str . "the result is " .  SimpleSymbols($str) . "</br>";
	
	//Second test vector
	$str2 = "f++d+";
	echo "For the string, " . $str . "the result is " .  SimpleSymbols($str2) . "</br>";

	function SimpleSymbols($str) {
		
		//Create a flag variable. Initially set to "FALSE"
		$flag = "FALSE";
		
		//Check to see if the first character is a letter. If it is, return false ($flag variable).
		if (!preg_match('/^[a-zA-Z]/', $str)) {
			//Check to see if the last character is a letter. If it is, return false ($flag variable).
			if(!preg_match('/[a-zA-Z]+$/', $str)) {
				//Check to see if all letters found have a "+" sign before, and after it.
				if(preg_match_all("/.{1,1}[a-z].{1,1}/", $str, $matches)){
					//When the sequence is verified to be correct, change the flag to true ($flag variable).
					$flag = "TRUE";
				}
			}
		}
		
		//Return the correct value. If the sequence is correct, returns "TRUE" otherwise "FALSE"
		return $flag;
   
  }

?>