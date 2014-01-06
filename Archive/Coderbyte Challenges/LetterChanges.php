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
  
  //Store all test vectors in an array
$vectors = array("hello*3", "fun times!");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
  echo "Test Vector: '". $vector . "':" . "</br>";
	echo "Output:" . " " . LetterChanges($vector). "</br>";
}