<?php
/*
 *
Developer: Mirza S. Baig

Date: 4-27-2014

Description:    Using the PHP language, have the function Consecutive(arr) take the
                array of integers stored in arr and return the minimum number of
                integers needed to make the contents of arr consecutive from the
                lowest number to the highest number. For example: If arr contains
                [4, 8, 6] then the output should be 2 because two numbers need to be
                added to the array (5 and 7) to make it a consecutive array of numbers
                from 4 to 8. Negative numbers may be entered as parameters and no array
                 will have less than 2 elements.

*/

//Store all test vectors in an array
$vectors = array(array(4,8,6), array(5,10,15), array(-2,10,4));

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode($vector, ",") . "':" . PHP_EOL;
    echo "Output:" . " " . Consecutive($vector). PHP_EOL;
}

function Consecutive($arr) {

    //Get the highest value in the array.
    $highest = max($arr);

    //Sort the current array in the ascending order.
    sort($arr);

    //Initialize a counter that would be used to iterate all values in the array.
    $i = 0;
    //Initialize a counter that would count the number of times an element has been inserted into an array.
    $valuesAdded = 0;

    //Create a while loop...
    while($arr[$i] <= $highest) {
        //Store the expected value to compare the current value to.
        $expected = $arr[$i] + 1;
        //If the incremented current array element is not the same as the expected one...
        if($arr[$i+1] != $expected) {
            //Add the expected element in the array (position will be right after the current element).
            array_splice($arr, ($i+1), 0, $expected);
            //Increment the counter to keep track of how many elements added thus far.
            $valuesAdded++;
        }
        //Increment this counter to go to the next element in the array.
        $i++;
        //If the last array element is reached...
        if($arr[$i] == $highest) {
            //Return the counter that kept track of the number of elements pushed into the array.
            return $valuesAdded;
        }
    }
}

?>