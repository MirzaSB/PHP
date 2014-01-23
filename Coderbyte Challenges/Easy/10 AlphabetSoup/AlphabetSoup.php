<?php
	
/*

Developer: Mirza S. Baig

Date: 1-123-2014

Description: Using the PHP language, have the function AlphabetSoup(str) take the str 
			 string parameter being passed and return the string with the letters in 
			 alphabetical order (ie. hello becomes ehllo). Assume numbers and punctuation
			 symbols will not be included in the string. 

*/
	
	function AlphabetSoup($str) { 
		//Split the current string into an array
		$arr = str_split($str);
		
		//Sort the array alphabetically (ascending order)
		sort($arr);
		
		//Initialize a blank string
		$newStr = "";
		
		//For all elements in the sorted array, concatenate them to create a new ordered string
		for ($i = 0; $i <= (count($arr) - 1); $i++) {
			$newStr = $newStr . $arr[$i];
		}
		
		//Set the current concatenated string to $str variable
		$str = $newStr;
		
		//Delete the unwanted variables
		unset($arr);
		unset($newStr);
		
		//Return the final value
		return $str;
	
	}
	
	//Store all test vectors in an array
	$vectors = array("coderbyte","hooplah");
	
	//Execute the test vectors using the function
	foreach ($vectors as $vector) {
		echo "Test Vector: '". $vector . "':" . "</br>";
		echo "Output:" . " " . AlphabetSoup($vector). "</br>";
	}

?>