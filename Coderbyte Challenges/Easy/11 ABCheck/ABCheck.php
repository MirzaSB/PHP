<?php
/**
 * Developer: Mirza Shiraz Baig
 * Date: 1/27/14
 * Description: Using the PHP language, have the function ABCheck(str) take the str parameter
 *              being passed and return the string true if the characters a and b are separated by
 *              exactly 3 places anywhere in the string at least once (ie. "lane borrowed" would result
 *              in true because there is exactly three characters between a and b). Otherwise return the string false.
 */

function ABCheck($str) {

    //Verify that if "a" exists in the string, then three places after, a "b" value exists
    preg_match_all('/[a].{3}[b]/', $str, $matches);

    //If values are found matching the above criteria, return a true value.
    if (count($matches[0]) > 0) {
        $str = "true";
    }
    else {
        //Otherwise, return false
        $str = "false";
    }

    //Return the final value
    return $str;
}


//Store all test vectors in an array
$vectors = array("lane borrowed","after badly", "Laura sobs");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "'";
    echo PHP_EOL;
    echo "Output:" . " " . ABCheck($vector). PHP_EOL;
}
