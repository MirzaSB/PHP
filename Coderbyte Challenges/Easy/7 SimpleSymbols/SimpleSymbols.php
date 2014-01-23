<?php
	function SimpleSymbols ($str) {
	  
	  //Initialize a boolean flag variable
	  $flag = "false";
	  
	  //Check to see if the first character is a letter. If it is, return false ($flag variable)
	  if (!preg_match('/^[a-zA-Z]/', $str)) {
		//Check to see if the last character is a letter. If it is, return false ($flag variable).
		if(!preg_match('/[a-zA-Z]+$/', $str)) {    
		  //Find all the letters in the string
			preg_match_all('/[A-Za-z]/', $str, $letters);
			//For all letters found, verify that the charafter before and   after it is "+"
		  for($i=0; $i<=(count($letters[0])-1); $i++){
			$pos = strpos($str, $letters[0][$i]);
			if (($str[$pos - 1] == "+") And ($str[$pos + 1] == "+")) {
			//Return "true" if the pattern is matched for the alphabet found
			  $flag = "true";
			}  
			else {
			  $flag = "false";
			  //Break the loop if there is no "+" before the alphabet or after it.
			  break;
			}
		  }
		}
	  }
	  
	  //Store the flag into $str as per specification
	  $str = $flag;
	  
	  //Return the final boolean value
	  return $str;
	  
	}

	//Store all test vectors in an array
	$vectors = array("+d+=3=+s+","f++d+");
	  
	//Execute the test vectors using the function
	foreach ($vectors as $vector) {
		echo "Test Vector: '". $vector . "':" . "</br>";
		echo "Output:" . " " . SimpleSymbols($vector). "</br>";
	}
?>