<?php 

/*
Developer: Mirza S. Baig

Date: 1-16-2014

Description: Using the PHP language, have the function TimeConvert(num) take the num parameter 
being passed and return the number of hours and minutes the 
parameter converts to (ie. if num = 63 then the output should be 1:3). 
Separate the number of hours and minutes with a colon. 

*/
  
function TimeConvert($num) {  
  
  //Return a value in the format, "<# of hours>:<# of minutes>". Hours are found by taking the value and "flooring" it to the nearest minute. Minutes are found by using a modulo operator
  // in the argument.
    return floor($num/60) . ":" . ($num%60); 
         
}

  //Store all test vectors in an array
  $vectors = array(126, 45, 63);
  
  //Execute the test vectors using the function
  foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . "</br>";
    echo "Output:" . " " . TimeConvert($vector). "</br>";
  }

?>