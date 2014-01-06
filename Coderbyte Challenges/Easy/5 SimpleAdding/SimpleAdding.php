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
  
  //Store all test vectors in an array
  $vectors = array(12,140);
  
  //Execute the test vectors using the function
  foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . "</br>";
    echo "Output:" . " " . SimpleAdding($vector). "</br>";
  }