<?php
/**
 *
Developer: Mirza S. Baig

Date: 3-21-2014

Description:    Using the PHP language, have the function RunLength(str) take the str
 *              parameter being passed and return a compressed version of the string
 *              using the Run-length encoding algorithm. This algorithm works by taking
 *              the occurrence of each repeating character and outputting that number
 *              along with a single character of the repeating sequence. For example:
 *              "wwwggopp" would return 3w2g1o2p. The string will not contain any
 *              numbers, punctuation, or symbols.

 */

//Create and store all test vectors in an array
$vectors = array("wwwggopp", "aabbcde", "wwwbbbw");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . RunLength($vector). PHP_EOL;
}

function RunLength($str) {

    //Split the string into an array.
    $arr = str_split($str);

    //Initialize a counter variable, and another variable that would store the final string.
    $counter = 0;
    $newStr = '';

    //Create a for loop...
    for($i = 0; $i < count($arr); $i++) {
        //Account for the very first element in the array.
        if($i == 0) {
            //Count the very first character in the string.
            $counter++;
        }

        //Account for the last element in the array so as to not get an exception.
        if($i <= count($arr)-2) {

            //If the current element has the same value as the next element.
            if($arr[$i] == $arr[$i+1]) {
                //Increment the counter to increase the count of the value found.
                $counter++;
            }
            else {
                //Account for when $newStr is empty.
                if($newStr == '') {
                    //Concatenate the current count variable with the appropriate array element.
                    $newStr = $counter . $arr[$i];
                }
                else {
                    //Concatenate the previous result with the current count variable with the apt array element.
                    $newStr = $newStr . $counter . $arr[$i];
                }
                //Reset the counter variable as a new value is found.
                $counter = 0;
                //Increment the counter to account for the new value found.
                $counter++;
            }
        }
        else {
            $newStr = $newStr . $counter . $arr[$i];
        }
    }

    //Return the final concatenated value.
    return $newStr;
}

?>