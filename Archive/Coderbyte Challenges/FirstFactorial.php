function FirstFactorial($num) { 
	return gmp_strval(gmp_fact($num)); 
}

//Store all test vectors in an array
$vectors = array(4, 8);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
	echo "Test Vector: '". $vector . "':" . "</br>";
	echo "Output:" . " " . FirstFactorial($vector). "</br>";
	echo "</br>";
}
