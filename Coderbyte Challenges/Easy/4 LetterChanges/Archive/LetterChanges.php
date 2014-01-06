<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MacRoman">
<title>LetterChanges.php</title>
</head>
<body>
	<p>Using the PHP language, have the function LetterChanges(str) take the str parameter being passed and modify it using the following algorithm. 
	Replace every letter in the string with the letter following it in the alphabet (ie. c becomes d, z becomes a). 
	Then capitalize every vowel in this new string (a, e, i, o, u) and finally return this modified string. 
	</p>
    <?php
    	echo "The string to process is 'This is a test for z. sgd unvdkr zqd z d h n t'"."<br/>";
    	echo "The new processed string is:" ."<br/>";
    	echo LetterChanges("This is a test for z. sgd unvdkr zqd z d h n t");
    	
    	function LetterChanges($str) {
		
			//Define a constant key mapping array for vowels
			$mapped = array(97=>65, 101=>69, 105=>73, 111=>79,117=>85);

			for ($i = 0; $i < strlen($str) ; $i++) {
		
				//Get the ASCII value of the particular character
				$newstr = ord($str[$i]);
		
				//If the ASCII value of the current character is not that of a space
				if ($newstr != 32) {
				
					//Increment the ASCII value to form the next alphabet
					$newstr++;
					
					//If the current character is z or Z, then replace it with a or A
					if( ($newstr == 123) || ($newstr == 91) ){
						$newstr -= 26;
					}
					
					//If the vowels are found in the keys of the vowels array, 
					//then get the value associated with the key, and assign it
					if( isset($mapped[$newstr]) )
						$newstr = $mapped[$newstr];
					
					//Convert the ASCII character code into a string
					$str[$i] = chr($newstr);
				}
		
			}
			
			//Return the final stored string
			return $str;
		}

	?>
    </body>
</html>
