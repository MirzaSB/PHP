<?php
/*

Developer: Mirza S. Baig

Date: 6-14-2014

Description:    Using the PHP language, have the function ThreeFiveMultiples(num)
                return the sum of all the multiples of 3 and 5 that are below num.
                For example: if num is 10, the multiples of 3 and 5 that are below 10
                are 3, 5, 6, and 9, and adding them up you get 23, so your program
                should return 23. The integer being passed will be between 1 and 100.
*/

//Create and store all test vectors in an array.
$vectors = array(10, 6, 1);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . ThreeFiveMultiples($vector). PHP_EOL;
}

function ThreeFiveMultiples($num) {

    //Declare two sum variables.
    $sum1 = 0;
    $sum2 = 0;

    //Get all the multiples of 3, and add them.
    $sum1 = array_sum(multiples($num, 3));

    //Get all the multiples of 5, and add them.
    $sum2 = array_sum(multiples($num, 5));

    //Return the final value.
    return ($sum1 + $sum2);

}

function multiples($num, $multiple) {

    //Declare an array variable.
    $arr = array();

    //Declare a variable to store sum.
    $sum = 0;

    //Create a while loop that will break as soon as the sum number becomes larger than the main number.
    while($sum < $num) {
        //Add the multiple value to the current sum value
        $sum = $sum + $multiple;
        //Push the value into an array if its less than the original number.
        if($sum < $num) {
            array_push($arr, $sum);
        }

    }

    //Return the array.
    return $arr;

}

?>