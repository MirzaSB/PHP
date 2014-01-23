<?php
	function CheckNums($num1,$num2) { 
	  if ($num1 < $num2) {
		$num1 = "true";
	  }
	  elseif ($num1 == $num2) {
		$num1 = "-1";
	  }
	  else {
		$num1 = "false";
	  }
	  // code goes here
	  return $num1; 
			 
	}

	//First set of test vectors
	$num1 = 3;
	$num2 = 122;

	//Second set of test vectors
	$num3 = 67;
	$num4 = 67;

	//Execute the function using the first set of test vectors
	echo CheckNums($num1,$num2);

	//Execute the function using the second set of test vectors
	echo CheckNums($num3,$num4);
?>