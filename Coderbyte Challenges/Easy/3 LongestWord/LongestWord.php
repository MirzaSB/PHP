  function LongestWord($sen) { 
    
    $array = explode(" ", $sen);
    
    $maxWord = "";
    
    for ($i = 0; $i < count($array); $i++) {
      if (strlen($array[$i]) > strlen($maxWord)) {
        $maxWord = $array[$i];
      }
    }
    
    $sen = $maxWord;
    // code goes here
    return $sen; 
    
  }
  
  //Store all test vectors in an array
$vectors = array("fun&!! time", "I love dogs");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
  echo "Test Vector: '". $vector . "':" . "</br>";
	echo "Output:" . " " . LongestWord($vector). "</br>";
}