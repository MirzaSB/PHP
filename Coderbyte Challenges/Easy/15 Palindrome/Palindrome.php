<?php
/*
Developer: Mirza S. Baig

Date: 1-30-2014

Description:	Using the PHP language, have the function Palindrome(str) take the str parameter being passed 
				and return the string true if the parameter is a palindrome, (the string is the same forward as it is backward) 
				otherwise return the string false. For example: "racecar" is also "racecar" backwards. Punctuation and numbers will not be part of the string.   

*/
function Palindrome($str) {
	$str = str_replace(' ', '', $str);
	$str = strrev($str) == $str ? "true" : "false";
	return $str;
}

 //Store all test vectors in an array
$vectors = array("never odd or even", "eye", "racecar");
	
//Execute the test vectors using the function
foreach ($vectors as $vector) {
	echo "Test Vector: '". $vector . "':" . "</br>";
	echo "Output:" . " " . Palindrome($vector). "</br>";
}
?>