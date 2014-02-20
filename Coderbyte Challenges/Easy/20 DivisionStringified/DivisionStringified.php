<?php

/*
Developer: Mirza S. Baig

Date: 2-20-2014

Description:    Using the PHP language, have the function DivisionStringified(num1,num2) take both
                parameters being passed, divide num1 by num2, and return the result as a string with
                properly formatted commas. If an answer is only 3 digits long, return the number
                with no commas (ie. 2 / 3 should output "1"). For example: if num1 is 123456789
                and num2 is 10000 the output should be "12,345".

*/

function DivisionStringified($num1, $num2) {

    //Check to see if the number of digits is more than or equal to 4
    if(ceil(log10($num1/$num2)) >= 4) {
        //Format the division result with commas placing done at the appropriate positions.
        return number_format(floor($num1/$num2));
    }
    else {
        return round($num1/$num2);
    }

}

//Create test vectors
$arr1 = array(2, 3);
$arr2 = array(123456789, 10000);
$arr3 = array(5,2);
$arr4 = array(6874,67);

//Store all test vectors in an array.
$vectors = array($arr1, $arr2, $arr3, $arr4);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode(" , ",$vector) . "':" . PHP_EOL;
    echo "Output:" . " " . DivisionStringified($vector[0], $vector[1]). PHP_EOL;
}

?>
