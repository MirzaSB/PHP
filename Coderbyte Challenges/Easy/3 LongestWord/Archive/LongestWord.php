<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=MacRoman">
<title>PHP Function</title>
</head>
<body>
	<p>Create a PHP function that would find the longest word</p>
	<p>The input parameter is "Keep this function"</p>
    <?php
    	
    	function LongestWord($sen) {

			//Split the string into an array delimited by a space character.
			$array = explode(" ", $sen);
			
			//Initiate the max length of the character count
			$MaxLength = 0;
			
			//Initiate the current max word
			$MaxWord = "";
			
			//For each word in the array, get the length of the string, and compare which one is the longest
			foreach ($array as $word) {
				if (strlen($word) > $MaxLength) {
					$MaxLength = strlen($word);
					$MaxWord = $word;
				}
			}
			
			echo "The word with the max length is ". $MaxWord . "<br>";
			
  			return $MaxWord; 
         
		}
   
		// keep this function call here  
		// to see how to enter arguments in PHP scroll down
		LongestWord("Keep this function"); 
	?>
    </body>
</html>
