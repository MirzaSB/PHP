<?php
/*

Developer: Mirza S. Baig

Date: 1-28-2014

Description: Using the PHP language, have the function VowelCount(str) take the str string parameter being passed and return the number of vowels the string contains (ie. "All cows eat grass" would return 5). Do not count y as a vowel for this challenge.  

*/
   
  function VowelCount($str) {  
    
    //Search for all vowels in the string, store them in an array
    preg_match_all("/[aeiou]/i", $str, $matches);
    //Store the number of matches found in a string
    $str = count($matches[0]);
    //Return the calue
    return $str; 
         
  }
  
  //Store all test vectors in an array
	$vectors = array("coderbyte","hello", "All cows eat grass");
	
	//Execute the test vectors using the function
	foreach ($vectors as $vector) {
		echo "Test Vector: '". $vector . "':" . "</br>";
		echo "Output:" . " " . VowelCount($vector). "</br>";
	}
  
?>