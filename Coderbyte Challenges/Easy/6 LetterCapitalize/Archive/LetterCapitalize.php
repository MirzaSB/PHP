<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MacRoman">
<title>LetterCapitalize.php</title>
</head>
<body>
	<p>Using the PHP language, have the function LetterCapitalize(str) take the str 
	parameter being passed and capitalize the first letter of each word. Words will be separated by only one space. </p>
    <?php
    	echo "The string to process is 'This is a test for this code.'"."<br/>";
    	echo "The new processed string is:" ."<br/>";
    	echo LetterCapitalize("This is a test for this code.");
    	
    	function LetterCapitalize($str) {
    		
    		//Split the input string into an array delimited by a space character (which is ASCII value 32)
    		$aTemp = explode( chr(32) , $str);
    		
    		//Clear out the variable
    		$str = "";
    		
    		//Create a for loop that would go through all the words in the array, and capitalize the first character
    		foreach ($aTemp as $value) {
    			$value = ucfirst($value);
    			//Store the new value in the temporary string variable
    			$str = $str . chr(32) . $value;
    		}
    		
    		//Return the new processed variable
    		return $str;
    		
    	}
	?>
    </body>
</html>
