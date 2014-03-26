<?php
/**
 *
Developer: Mirza S. Baig

Date: 3-25-2014

Description:    Using the PHP language, have the function PrimeMover(num) return the
 *              numth prime number. The range will be from 1 to 10^4. For example: if
 *              num is 16 the output should be 53 as 53 is the 16th prime number.
 */

//Create and store all test vectors in an array
$vectors = array(16, 9, 100);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . PrimeMover($vector). PHP_EOL;
}

function PrimeMover($num) {

    //Initialize an empty array to store prime numbers.
    $primeNumbers = array();

    //Run the "PrimeTime" function between 2-10000.
    for ($x = 2; $x <= 10000; $x++) {
        //If a value is determined to be a prime number, store the value inside the primeNumbers array.
        if (PrimeTime($x) == "true") {
            array_push($primeNumbers, $x);
        }
    }

    //Return the appropriate prime number from the array.
    return $primeNumbers[$num-1];

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

    //Return the prime number
    return "true";
}

?>