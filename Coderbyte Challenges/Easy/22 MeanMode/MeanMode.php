<?php
/*
 *
Developer: Mirza S. Baig

Date: 2-26-2014

Description:    Using the PHP language, have the function MeanMode(arr) take the array
                of numbers stored in arr and return 1 if the mode equals the mean, 0 if
                they don't equal each other (ie. [5, 3, 3, 3, 1] should return 1
                because the mode (3) equals the mean (3)). The array will not be
                empty, will only contain positive integers, and will not contain more
                than one mode.

*/

//Test vectors that would give 0 as the result.
$arr1 = array(1,2,3);

//Test vectors that would give 1 as the result.
$arr2 = array(4, 4, 4, 6, 2);
$arr3 = array(5, 3, 3, 3, 1);

//Create and store all test vectors in an array.
$vectors = array($arr1, $arr2, $arr3);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode(" , ",$vector) . "':" . PHP_EOL;
    echo "Output:" . " " . MeanMode($vector). PHP_EOL;
}


function MeanMode($arr) {

    $mode = array();

    //Evaluate the mean of the array; which is the average of the array elements.
    $mean = array_sum($arr)/count($arr);

    //Evaluate the mode of the array; which is find the element that occurs the most inside the array.
    //Sets the arrTemp to an array using the values of arrays as keys and their
    //frequency in array as values.
    $arrTemp = array_count_values($arr);

    //Sort the new temp array in high to low order while maintaining index association.
    arsort($arrTemp, 2);

    foreach ($arrTemp as $x => $x_value) {
        if ($x_value > 1) {
            $mode = $x;
        }
        else {
            $mode = 0;
        }
        break;
    }

    //Check to see if the mode's value is the same as the mean value.
    if ($mode == $mean) {
        return 1;
    }
    else {
        return 0;
    }
}

?>