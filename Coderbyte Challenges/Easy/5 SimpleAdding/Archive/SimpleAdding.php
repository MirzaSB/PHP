<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MacRoman">
<title>PHP Function SimpleAdding</title>
</head>
<body>
	<p>Using the PHP language, have the function SimpleAdding(num) add up all the numbers from 1 to num. For the test cases, the parameter num will be any number from 1 to 1000.</p>
    <?php
    	
    	function SimpleAdding($num) {
    	
    		//Initialize a temporary sum variable
    		$sum = 0;
    	
    		//Create a for loop that would add numbers to the sum variable and decrement the parament variable
    		for($x = $num; $x >= 0; $x--) {
    			$sum += $x;
    		}
    		$num = $sum;
        	return $num;
		}
   
		// keep this function call here  
		// to see how to enter arguments in PHP scroll down
		echo "The test case is 140. The solution of the addition of all numbers from 1 to 140 is ". SimpleAdding(140); 
	?>
    </body>
</html>
