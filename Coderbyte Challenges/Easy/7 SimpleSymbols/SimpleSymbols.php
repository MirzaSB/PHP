<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MacRoman">
<title>SimpleSymbols.php</title>
</head>
<body>
	<p>Using the PHP language, have the function SimpleSymbols(str) take the str parameter being passed and determine if it is an acceptable sequence by either returning the string true or false. The str parameter will be composed of + and = symbols with several letters between them (ie. ++d+===+c++==a) and for the string to be true each letter must be surrounded by a + symbol. So the string to the left would be false. The string will not be empty and will have at least one letter. </p>
    <?php
	
		//First test vector
		$str = "++d+53+c+";
		//Execute the function using the first test vector
		echo "For the string '" . $str . "', the result is " .  SimpleSymbols($str) . "</br>";
	
		//Second test vector
		$str2 = "f++d+";
		echo "For the string '" . $str2 . "', the result is " .  SimpleSymbols($str2) . "</br>";

		function SimpleSymbols($str) {
		
			//Create a flag variable. Initially set to "FALSE"
			$flag = "FALSE";
		
			//Check to see if the first character is a letter. If it is, return false ($flag variable).
			if (!preg_match('/^[a-zA-Z]/', $str)) {
				//Check to see if the last character is a letter. If it is, return false ($flag variable).
				if(!preg_match('/[a-zA-Z]+$/', $str)) {
					//Check to see if all letters found have a "+" sign before, and after it.
					if(preg_match_all("/.{1,1}[a-z].{1,1}/", $str, $matches)){
						//When the sequence is verified to be correct, change the flag to true ($flag variable).
						$flag = "TRUE";
					}
				}
			}
		
			//Return the correct value. If the sequence is correct, returns "TRUE" otherwise "FALSE"
			return $flag;
   
  	}

?>
    </body>
</html>
