<?php
/*
Developer: Mirza S. Baig

Date: 2-14-2014

Description:    Using the PHP language, have the function SecondGreatLow(arr)
                take the array of numbers stored in arr and return the second lowest
                and second greatest numbers, respectively, separated by a space.
                For example: if arr contains [7, 7, 12, 98, 106] the output should
                be 12 98. The array will not be empty and will contain at least 2
                numbers. It can get tricky if there's just two numbers!

*/

function SecondGreatLow($arr) {

    //Sort the array in ascending order.
    asort($arr);

    //Initialize counter variable starting from the second element in the array.
    $i = 1;

    //Initialize integer variables to store the second lowest and the second largest values in the array.
    $secondLowest = 0;
    $secondHighest = 0;

    //Initialize boolean flag variable to break out of the coming while loops.
    $flag = false;

    //Create a loop to get the second lowest value in the array
    while(!$flag) {
        //Verify if the current value is not the same as the first value in the array (which will be the lowest)
        if($arr[$i] != $arr[$i-1]) {
            //Verify that the value found is infact less than the previous value.
            if($arr[$i] > $arr[$i-1]) {
                //Store the second lowest value found.
                $secondLowest = $arr[$i];
                //Change the flag to true to exit out of the loop.
                $flag = true;
            }
        }
        //Increment the counter variable to go to the next value in the array.
        $i++;
    }

    //Change the value of the counter variable to start from the second to last element in the array.
    $i = count($arr) - 1;

    //Change the flag to false so that it can be used in the next while loop.
    $flag = false;

    //Create a loop to get the second highest value in the array.
    while(!$flag) {
        //Verify that the current value is not the same as the max value in the array.
        if($arr[$i] != $arr[$i-1]) {
            //Verify that the value found is in fact greater than the value found previously.
            if($arr[$i] > $arr[$i-1]) {
                //Store the second highest value.
                $secondHighest = $arr[$i-1];
                //Change the flag to true to exit out of the loop.
                $flag = true;
            }
        }
        //Decrement the counter variable.
        $i--;
    }

    //Return the second lowest and the second highest value as a string.
    return "$secondLowest $secondHighest";

}

//Create test vectors
$arr1 = array(7, 7, 12, 98, 106);
$arr2 = array(1, 42, 42, 180);
$arr3 = array(4,90);

//Store all test vectors in an array.
$vectors = array($arr1, $arr2, $arr3);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . SecondGreatLow($vector). PHP_EOL;
}

?>
