<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php      
  $test = "f++d+";

	//echo SimpleSymbols($test);
  SimpleSymbols($test);
  
	function SimpleSymbols($str) {

	  //Search for an occurence of a letter (Uppercase or otherwise) that has 
	  //a "+" character before and after it
	  preg_match_all('/\+[a-zA-Z]\+/', $str, $matches);
    
    echo count($matches). "</br>";
    echo PHP_EOL;
    print_r($matches);
    
	  /*if (count($matches) > 0) {
	    $str = true;
	  }
	  else {
	   $str = false;
	  }*/
    
	//Return a value
	return $str;
	}
?>
</body>
</html>

<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php      
  $test = "f++d+";

	//echo SimpleSymbols($test);
  echo SimpleSymbols($test);
  echo PHP_EOL;
  
	function SimpleSymbols($str) {

	  //Search for an occurence of a letter (Uppercase or otherwise) that has 
	  //a "+" character before and after it
	  preg_match_all('/\+[a-zA-Z]\+/', $str, $matches);
    
	  if (count($matches) > 0) {
	    $str = true;
	  }
	  else {
	   $str = false;
	  }
    
	//Return a value
	return $str;
	}
?>
</body>
</html>

<?php
$str = "f++d+53-c++d";
preg_match_all("/.?[a-z].?/", $str, $matches);
//preg_match_all("/.{1,1}[a-z].{1,1}/", $str, $matches);
print_r($matches);
?>

$str = "++d+53-c++d";
//preg_match_all("/.?[a-z].?/", $str, $matches);
//preg_match_all("/.{1,1}[a-z].{1,1}/", $str, $matches);
//print_r($matches);

$test = SimpleSymbols($str);
echo $test;

function SimpleSymbols($str) {
	
	//Check to see if the first character is a letter.
	if (preg_match('/^[a-zA-Z]/', $str)) {
		echo "SUCCESS";
	}
	else {
		echo "FAIL";
		$str = false;
	}
	
	return $str;
}

<?php

   $str = "b++d+53-c++";
  //preg_match_all("/.?[a-z].?/", $str, $matches);
  //preg_match_all("/.{1,1}[a-z].{1,1}/", $str, $matches);
  //print_r($matches);

  $test = SimpleSymbols($str);
  //echo $test;

  function SimpleSymbols($str) {
  
  //Check first
  //echo (preg_match('/^[a-zA-Z]/', $str, $matches));
  //Check last
  //preg_match('/[a-zA-Z]+$/', $str, $matches);
  //Check both
  //preg_match('/^[a-zA-Z].*[a-zA-Z]+$/', $str, $matches);
  
  //print_r($matches);
  
	  //Check to see if the first character is a letter. If it is, return false
	  if (!preg_match('/^[a-zA-Z]/', $str)) {
		echo "SUCCESS 1 </br>";
		if(!preg_match('/[a-zA-Z]+$/', $str, $matches)) {
			echo "SUCCESS 2 </br>";
			//Check to see if all letters found have a "+" sign before, and after it.
			if(preg_match_all("/.{1,1}[a-z].{1,1}/", $str, $matches)){
				print_r($matches);
				$flag = "TRUE";
			}
		}
	}
	
	 return $str;
   
  }

?>

