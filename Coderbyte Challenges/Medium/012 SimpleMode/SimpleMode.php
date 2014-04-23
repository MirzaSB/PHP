<?php
/*
 *
Developer: Mirza S. Baig

Date: 4-23-2014

Description:    Using the PHP language, have the function SimpleMode(arr) take the
                array of numbers stored in arr and return the number that appears most
                frequently (the mode). For example: if arr contains [10, 4, 5, 2, 4]
                the output should be 4. If there is more than one mode return the one
                that appeared in the array first (ie. [5, 10, 10, 6, 5] should return
                5 because it appeared first). If there is no mode return -1. The array
                will not be empty.

*/


$arr1 = array(10,4,5,2,4);
$arr2 = array(5, 10, 10, 6, 5);
$arr3 = array(5, 5, 2, 2, 1);
$arr4 = array(3,4,1,6,10);

//Create and store all test vectors in an array.
$vectors = array($arr1, $arr2, $arr3, $arr4);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode(" , ",$vector) . "':" . PHP_EOL;
    echo "Output:" . " " . SimpleMode($vector). PHP_EOL;
}


function SimpleMode($arr) {

    $mode = array();

    //Evaluate the mode of the array; which is find the element that occurs the most inside the array.
    //Sets the arrTemp to an array using the values of arrays as keys and their
    //frequency in array as values.
    $arrTemp = array_count_values($arr);

    //Sort the new temp array in high to low order while maintaining index association.
    arsort($arrTemp, 2);

    //Create a for loop...
    foreach ($arrTemp as $x => $x_value) {
        //Accounting for all unique values in the array.
        if ($x_value > 1) {
            //Store the value that is occurring the most times in the array.
            return $x;
        }
        else {
            //Otherwise, give a 0 value.
            return "-1";
        }
        break;
    }
}

?>