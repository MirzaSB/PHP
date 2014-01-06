<?php      
	$test = "+d+=3=+s+";

	echo SimpleSymbols($test);

	function SimpleSymbols($str) {

	//Search for an occurence of a letter (Uppercase or otherwise) that has 
	//a "+" character before and after it
	preg_match('/(\+)[a-zA-Z](\+)/', $str, $matches);
	if (count($matches) > 0) {
	  $str = true;
	}
	else {
	  $str = false;
	}

	//Return a value
	return $str;
	}
?>

<?php

	$str = "++d+53+c+";
	$test = SimpleSymbols($str);
	echo "The result is " . $test;

	function SimpleSymbols($str) {
		
		//Create a flag variable. Initially set to "FALSE"
		$flag = "FALSE";
		
		//Check to see if the first character is a letter. If it is, return false ($flag variable).
		if (!preg_match('/^[a-zA-Z]/', $str)) {
			echo "SUCCESS </br>";
			//Check to see if the last character is a letter. If it is, return false ($flag variable).
			if(!preg_match('/[a-zA-Z]+$/', $str)) {
				echo "SUCCESS II </br>";
				//Check to see if all letters found have a "+" sign before, and after it.
				if(preg_match_all("/.{1,1}[a-z].{1,1}/", $str, $matches)){
					$flag = "TRUE";
				}
			}
		}
    
		return $flag;
   
  }

?>