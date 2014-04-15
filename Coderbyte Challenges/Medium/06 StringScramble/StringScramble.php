<?php
/*
Developer: Mirza S. Baig

Date: 4-13-2014

Description:    Using the PHP language, have the function StringScramble(str1,str2)
                take both parameters being passed and return the string true if a
                portion of str1 characters can be rearranged to match str2, otherwise
                return the string false. For example: if str1 is "rkqodlw" and str2 is
                "world" the output should return true. Punctuation and symbols will
                not be entered with the parameters.

*/

//Store all test vectors in an array
$vectors = array(array("rkqodlw", "world"), array("cdore", "coder"), array("h3llko", "hello"));

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode($vector, ",") . "':" . PHP_EOL;
    echo "Output:" . " " . StringScramble($vector[0], $vector[1]). PHP_EOL;
}

function StringScramble($str1, $str2) {

    //Initialize the character locator index.
    $index = 0;

    //Create a for loop...
    for ($i = 0; $i < strlen($str2); $i++) {
        //Check to see if the character from str1 is occurring in str2.
        $index = strpos($str1, $str2[$i]);
        if (($index >= 0) And ($index !== false)) {
            //Remove the letter that is found in both str2 and str2, and concatenate
            //the remainder.
            $str1 = substr($str1, 0, $index) . substr($str1, $index+1). PHP_EOL;
        }
        else {
            //If a character found is not present in str2, return false.
            if($index === false) {
                return "false";
            }
        }
    }

    //All else, return true
    return "true";
}

?>