<?php
/*
Developer: Mirza S. Baig

Date: 1-31-2014

Description:	Using the PHP language, have the function ArithGeo(arr) take the array of numbers stored in arr 
				and return the string "Arithmetic" if the sequence follows an arithmetic pattern or return "Geometric" if 
				it follows a geometric pattern. If the sequence doesn't follow either pattern return -1. An arithmetic 
				sequence is one where the difference between each of the numbers is consistent, where as in a geometric sequence, 
				each term after the first is multiplied by some constant or common ratio. Arithmetic example: [2, 4, 6, 8] 
				and Geometric example: [2, 6, 18, 54]. Negative numbers may be entered as parameters, 0 will not be entered, 
				and no array will contain all the same elements.  

*/
	function ArithGeo($arr) {
		
		//Initialize the final return variable
		$return = "";
		
		//For all the values in the array...
		for ($i=1; $i<count($arr); $i++) {
			
			//Verify if the current number in the array matches the Arithmetic sequence
			if($arr[$i] == ($arr[$i-1] + ($arr[1] - $arr[0]))) {
				$return = "Arithmetic";
			}
			//If its not in the arithmetic sequence, verify if the current number in the array matches the Geometric sequence
			elseif($arr[$i] == ($arr[$i-1] * ($arr[1] / $arr[0]))) {
				$return = "Geometric";
			}
			//If its in neither arithmetic or geometric sequence, give a negative value, and break the loop
			else {
				$return = -1;
				break;
			}
		}
		
		//Return the final value
		$arr = $return;
		return $arr;
	}
	
	//These two arrays should return the value, "Arithmetic".
	$arr1 = array(5,10,15);
	$arr2 = array(2, 4, 6, 8);
   
	//This array should return the value, "Geometric".
	$arr3= array(2, 6, 18, 54);
   
	//This array should return the value, "-1".
	$arr4 = array(2,4,16,24);
   
	//Store all test vectors in an array
	$vectors = array($arr1, $arr2, $arr3, $arr4);
  
	//Execute the test vectors using the function
	foreach ($vectors as $vector) {
		echo "Test Vector: '". $vector . "':" . "</br>";
		echo "Output:" . " " . ArithGeo($vector). "</br>";
	}
?>