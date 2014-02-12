<?php
/*

Developer: Mirza S. Baig

Date: 1-28-2014

Description: Using the PHP language, have the function WordCount(str) take the str string parameter being passed and return the number of words the string contains (ie. "Never eat shredded wheat" would return 4). Words will be separated by single spaces. 

*/
   
  function WordCount($str) {  
    
    //Store the number of words found in a string
    $str = count(explode(" ", $str));
    //Return the calue
    return $str; 
         
  }
  
  //Store all test vectors in an array
	$vectors = array("Never eat shredded wheat","Hello World", "one 22 three");
	
	//Execute the test vectors using the function
	foreach ($vectors as $vector) {
		echo "Test Vector: '". $vector . "':" . "</br>";
		echo "Output:" . " " . WordCount($vector). "</br>";
	}
  
?>