<?php
/*
Developer: Mirza S. Baig

Date: 2-9-2014

Description:	Using the PHP language, have the function ArrayAdditionI(arr) take the array of numbers stored in arr and return the string true if any combination 
				of numbers in the array can be added up to equal the largest number in the array, otherwise return the string false. For example: if arr 
				contains [4, 6, 23, 10, 1, 3] the output should return true because 4 + 6 + 10 + 3 = 23. The array will not be empty, will not contain 
				all the same elements, and may contain negative numbers.  

*/
  function ArrayAdditionI($arr) {
    
    //Initialize final return value
    $return = "";
    
    //Get the largest value in the array
    $max = max($arr);
    
    //Get the index of the largest value in the array
    $maxPos = array_search($max, $arr);
    
    //Remove the largest value from the array
    unset($arr[$maxPos]);
    
    //Sort the array in ascending order
    sort($arr, SORT_NUMERIC);
    
    //Initialize a sum variable
    $sum = 0;
    
    for($i = 0; $i < count($arr); $i++) {
      
      //Add the first two values
      $sum += $arr[$i];
      
      //Create a for loop that will sum the rest of the values except the first value
      for($j = 0; $j < count($arr); $j++) {
        //Ignore the first value of the array
        if ($i != $j) {
          //Add the two numbers
          $sum += $arr[$j];
          //If the current sum is the same value as the max value, return true
          if ($sum == $max) {
            return "true";
          }
        }
      }
      
      //Create a for loop that will sum the rest of the values
      for ($k = 0; $k < count($arr); $k++) {
        //Ignore the first value
        if ($i != $k) {
          //Subtract the total sum of the previous loop with the current value
          $sum -= $arr[$k];
          //If the current value is the same value as the max value, return true
          if ($sum == $max) {
            return "true";
          }
        }
      }
      
      $sum = 0;
    }
    
    return "false";
    
  }
	
	//These two arrays should return the value, "true".
	$arr1 = array(4, 6, 23, 10, 1, 3);
	$arr2 = array(3,5,-1,8,12);
   
	//This array should return the value, "false".
	$arr3= array(5,7,16,1,2);
   
	//Store all test vectors in an array
	$vectors = array($arr1, $arr2, $arr3);
  
	//Execute the test vectors using the function
	foreach ($vectors as $vector) {
		echo "Test Vector: '". $vector . "':" . "</br>";
		echo "Output:" . " " . ArrayAdditionI($vector). "</br>";
	}
?>