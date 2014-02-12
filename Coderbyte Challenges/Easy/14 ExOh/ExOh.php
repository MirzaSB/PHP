<?php
/*
Developer: Mirza S. Baig

Date: 1-30-2014

Description:	Using the PHP language, have the function ExOh(str) take the str parameter being passed and return the string true if there is an equal number of x's 
				and o's, otherwise return the string false. Only these two letters will be entered in the string, no punctuation or numbers. For example: if str is "xooxxxxooxo" 
				then the output should return false because there are 6 x's and 5 o's.    

*/
function ExOh($str) {  

  //Get all "x" values, and store them in an array
  preg_match_all('/[x]/', $str, $matches_x);
  //Get all "o" values, and store them in an array
  preg_match_all('/[o]/', $str, $matches_o);
  //If the number of "x" matches is equal to the number of "o" matches, store "true"
  if (count($matches_x[0]) == count($matches_o[0])){
    $str = "true";
  }
  else {
    $str = "false";
  }
  //Return the final value
  return $str; 
         
}

 //Store all test vectors in an array
$vectors = array("xooxxo", "x", "xo");
	
//Execute the test vectors using the function
foreach ($vectors as $vector) {
	echo "Test Vector: '". $vector . "':" . "</br>";
	echo "Output:" . " " . ExOh($vector). "</br>";
}
?>