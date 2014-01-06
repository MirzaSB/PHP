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
  
  //Store all test vectors in an array
  $vectors = array("hello world","i ran there");
  
  //Execute the test vectors using the function
  foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . "</br>";
    echo "Output:" . " " . LetterCapitalize($vector). "</br>";
  }