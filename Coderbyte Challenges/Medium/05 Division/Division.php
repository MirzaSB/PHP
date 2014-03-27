<?php
/*
Developer: Mirza S. Baig

Date: 3-27-2014

Description:    Using the PHP language, have the function Division(num1,num2) take both
                parameters being passed and return the Greatest Common Factor. That is,
                return the greatest number that evenly goes into both numbers with no
                remainder. For example: 12 and 16 both are divisible by 1, 2, and 4 so
                the output should be 4. The range for both parameters will be from 1
                to 10^3.

*/

//Store all test vectors in an array
$vectors = array(array(12, 16), array(7, 3), array(36, 54));

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode($vector, ",") . "':" . PHP_EOL;
    echo "Output:" . " " . Division($vector[0], $vector[1]). PHP_EOL;
}

function Division($num1, $num2) {

    //Create a loop....
    while ($num2 != 0){

        //Get the modulo value of the two integers.
        $x = $num1 % $num2;
        //Shift the value of the second integer into the first.
        $num1 = $num2;
        //Store the modulo value into the second integer (this will break the loop as soon as the number becomes 0).
        $num2 = $x;

    }

    //Return the last stored modulo value.
    return $num1;
}

?>