<?php

/*
Developer: Mirza S. Baig

Date: 5-9-2014

Description:    Using the PHP language, have the function PrimeChecker(num) take num
                and return 1 if any arrangement of num comes out to be a prime number,
                otherwise return 0. For example: if num is 910, the output should be 1
                because 910 can be arranged into 109 or 019, both of which are primes.
*/

//Create and store all test vectors in an array
$vectors = array(98, 598, 910);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . PrimeChecker($vector). PHP_EOL;
}

function PrimeChecker($num) {

    //Split the number into an array.
    $arr = str_split($num);

    //Create a new array to store the permutations.
    $arr_sorted_permutations = array();

    //Create a new array to store the permutations.
    $arr_permutations = array();

    //Get the count of all elements in the array.
    $arr_count = count($arr);

    //Get the keys of the array.
    $keys = array_keys($arr);

    //Initialize the counter to 1.
    $i = 1;

    //Check to see if all the digits in the argument are the same.
    //If so, check to see if the number is prime, and then return the appropriate result.
    if(count(array_count_values($arr)) == 1) {
        if(PrimeTime($num) == "true") {
            return "1";
        }
        else {
            return "0";
        }
    }

    while ($i < $arr_count) {

        if ($keys[$i] > 0) {

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
        elseif ($keys[$i] == 0) {
            $keys[$i] = $i;
            $i++;
        }
    }

    for($i = 0; $i < count($arr_permutations); $i++) {
        array_push($arr_sorted_permutations, implode($arr_permutations[$i]));
    }

    //Sort the array.
    sort($arr_sorted_permutations);

    for($i = 0; $i < count($arr_sorted_permutations); $i++) {
        if(PrimeTime($arr_sorted_permutations[$i]) == "true") {
            return "1";
        }
    }

    //Return "0" for all other numbers.
    return "0";
}

function PrimeTime($num) {

    //If the input is "2", no need to run anything, just return the true.
    if ($num == 2) {
        return "true";
    }

    for ($i = 2; $i <= ceil(sqrt($num)); $i++ ) {
        if($i != $num) {
            if ($num % $i == 0) {
                //If the number is determined not to be prime, return false.
                return "false";
            }
        }
    }

    //Return true if the number is prime
    return "true";
}

?>