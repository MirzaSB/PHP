function FirstReverse($str) {  
	return strrev($str); 
}
  
//Store all test vectors in an array
$vectors = array("coderbyte", "I Love Code");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
	echo "Test Vector: '". $vector . "':" . "</br>";
	echo "Output:" . " " . FirstReverse($vector). "</br>";
}