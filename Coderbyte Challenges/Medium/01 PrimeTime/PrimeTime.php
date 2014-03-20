<?php
/**
 *
Developer: Mirza S. Baig

Date: 3-20-2014

Description:    Using the PHP language, have the function PrimeTime(num) take the num
 *              parameter being passed and return the string true if the parameter is
 *              a prime number, otherwise return the string false. The range will be
 *              between 1 and 2^16.
 */

//Run the function between 2-100.
for ($x = 2; $x <= 100; $x++) {
    echo "Test Vector: " . $x . PHP_EOL;
    echo "Output: " . PrimeTime($x). PHP_EOL;
}

function PrimeTime($num) {

    //If the input is "2", no need to run anything, just return the true.
    if ($num == 2) {
        return "true";
    }

    //
    for ($i = 2; $i <= ceil(sqrt($num)); $i++ ) {
        if($i != $num) {
            if ($num % $i == 0) {
                return "false";
            }
        }
    }

    return "true";
}

?>