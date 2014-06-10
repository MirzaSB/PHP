<?php
/*

Developer: Mirza S. Baig

Date: 6-10-2014

Description:    Using the PHP language, have the function BracketMatcher(str) take the
                str parameter being passed and return 1 if the brackets are correctly
                matched and each one is accounted for. Otherwise return 0.
                For example: if str is "(hello (world))", then the output should be 1,
                but if str is "((hello (world))" the the output should be 0 because
                the brackets do not correctly match up. Only "(" and ")" will be used
                as brackets. If str contains no brackets return 1.

*/

//Create and store all test vectors in an array.
$vectors = array("(hello (world))", "((hello (world))", "(coder)(byte))", "(c(oder)) b(yte)");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . BracketMatcher($vector). PHP_EOL;
}

function BracketMatcher($str) {

    //Declare 2 array variables
    $matches = array();
    $matches2 = array();

    //Search for all "(" in the string.
    preg_match_all('/[\(]/', $str, $matches);

    //Search for all ")" in the string.
    preg_match_all('/[\)]/', $str, $matches2);

    if(count($matches[0]) === count($matches2[0])) {
        return "1";
    }
    else {
        return "0";
    }

}

?>