<?php

/*
Developer: Mirza S. Baig

Date: 5-6-2014

Description:    Using the PHP language, have the function PermutationStep(num) take
                the num parameter being passed and return the next number greater than
                num using the same digits. For example: if num is 123 return 132, if
                it's 12453 return 12534. If a number has no greater permutations,
                return -1 (ie. 999).
*/

//Create and store all test vectors in an array
$vectors = array(123, 12453, 11121, 41352, 999);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . PermutationStep($vector). PHP_EOL;
}

function PermutationStep($num) {

    //Split the number into an array.
    $arr = str_split($num);

    //Create a new array to store the sorted permutations.
    $arr_sorted_permutations = array();

    //Create a new array to store the permutations.
    $arr_permutations = array();

    //Get the count of all elements in the array.
    $arr_count = count($arr);

    //Get the keys of the array.
    $keys = array_keys($arr);

    //Initialize a counter to 1.
    $i = 1;

    //Check to see if all the digits in the argument are the same. If so, return -1.
    if(count(array_count_values($arr)) == 1) {
        return "-1";
    }

    while ($i < $arr_count) {

        if ($keys[$i]>0) {

            $keys[$i]--;
            $j = 0;

            if ($i % 2 == 1) {
                $j = $keys[$i];
            }

            //Swap the positions of the numbers.
            $temp = $arr[$j];
            $arr[$j] = $arr[$i];
            $arr[$i] = $temp;
            $i = 1;

            //Store the final array.
            $arr_permutations[] = $arr;

        }
        elseif ($keys[$i] == 0)
        {
            $keys[$i] = $i;
            $i++;
        }
    }

    for($i = 0; $i < count($arr_permutations); $i++) {
        //Push the permutations in an array.
        array_push($arr_sorted_permutations, implode($arr_permutations[$i]));
    }

    //Sort the array.
    sort($arr_sorted_permutations);

    for ($i = 0; $i < count($arr_sorted_permutations); $i++) {
        //If the current number is greater than the function's argument parameter, return it.
        if($arr_sorted_permutations[$i] > $num) {
            return $arr_sorted_permutations[$i];
        }
    }
}

?>