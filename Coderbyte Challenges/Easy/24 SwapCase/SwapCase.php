<?php
/**
 *
Developer: Mirza S. Baig

Date: 3-6-2014

Description:    Using the PHP language, have the function SwapCase(str) take the str
 *              parameter and swap the case of each character. For example: if str is
 *              "Hello World" the output should be hELLO wORLD. Let numbers and symbols
 *              stay the way they are.

*/

//Create and store all test vectors in an array.
$vectors = array("Hello World", "Hello-LOL", "Sup DUDE!!?");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . SwapCase($vector). PHP_EOL;
}

function SwapCase($str) {

    //Split the string into an array.
    $arr = str_split($str);

    //Create a for loop...
    for($i = 0; $i < count($arr); $i++) {

        //Check to see if the particular value is alphabetic.
        if (ctype_alpha($arr[$i])) {
            //Check to see if the value is uppercase.
            if (ctype_upper($arr[$i])) {
                //Change the value to lowercase.
                $arr[$i] = strtolower($arr[$i]);
            }
            //Check to see if the value is lowercase.
            elseif (ctype_lower($arr[$i])) {
                //Change the value to uppercase.
                $arr[$i] = strtoupper($arr[$i]);
            }
            else {
                echo ("Unknown value --> " . $arr[$i]);
                break;
            }
        }
    }

    //Concatenate all values in the array to make the final string.
    $str = implode("", $arr);

    //Return the final value.
    return $str;
}

?>