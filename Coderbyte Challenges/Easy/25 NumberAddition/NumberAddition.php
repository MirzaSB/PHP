<?php
/**
 *
Developer: Mirza S. Baig

Date: 3-10-2014

Description:    Using the PHP language, have the function NumberSearch(str) take the
 *              str parameter, search for all the numbers in the string, add them
 *              together, then return that final number. For example: if str is
 *              "88Hello 3World!" the output should be 91. You will have to
 *              differentiate between single digit numbers and multiple digit numbers
 *              like in the example above. So "55Hello" and "5Hello 5" should return
 *              two different answers. Each string will contain at least one letter
 *              or symbol.
 */

//Create and store all test vectors in an array.
$vectors = array("88Hello 3World!", "75Number9", "10 2One Number*1*");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . NumberAddition($vector). PHP_EOL;
}

function NumberAddition($str) {
    //Search for all numbers in the string.
    preg_match_all('!\d+!', $str, $matches);

    //Add all the elements in the $matches array, and return the value.
    return array_sum($matches[0]);
}

?>